<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        //O arquivo processado deve apresentar como resultados a quantidade de clientes e de vendedores
        //informados na entrada, a média salarial dos vendedores, o ID da venda mais cara, bem como o pior
        //vendedor.
        if ($request->hasFile('file')) {

            foreach ($request->file as $file) {
                $data = file($file);
                $filename = $file->getClientOriginalName();
                $file->storeAs('public/data/in', $filename);

                //contadores
                $salesManCount = 0;
                $customersCount = 0;
                $mediaSalary = 0;
                $maiorVenda = 0;

                foreach ($data as $linha) {
                    // Delimitador de entidade é ;
                    $arrayLinha = explode(';', $linha);
                    if ($arrayLinha[0] == '001') {
                        //É salesman
                        $salesManCount++;
                        $mediaSalary[] = floatval($arrayLinha[3]);

                    } else if ($arrayLinha[0] == '002') {
                        //É customer
                        $customersCount++;
                    } else if ($arrayLinha[0] == '003') {
                        //É sale

                    }
                }
                //salvar o arquivo .dat em um diretório /out
                //o sistema deve gerar um arquivo de saída seguindo
                //o formato {file_name}.done.dat em outro diretório, como %HOMEPATH%/data/out.

            }
        }
    }
}
