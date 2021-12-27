<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\Pago;

class ClientesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function pagos($tipo_doc, $num_identificacion)
    {
        $cliente = Cliente::where('tipo_documento', '=', $tipo_doc)->where('num_documento', '=', $num_identificacion)->get();

        $id = $cliente[0]['id'];
        $nombre = $cliente[0]['nombre_cliente'];
        $pagos = Pago::where('vigencia', '=', 1)->where('cliente_id','=', $id)->get();

        $data=[];

        foreach($pagos as $pago)
        {
            $data[]=['num_plan' =>  $pago['num_plan'], 'valor'  =>  $pago['valor'], 'vencimiento'   => $pago['vencimiento'], 'vigencia' => $pago['vigencia']];
        };
        $array = ['nombre' => $nombre, 'data' => $data];
        //dd($array);
        return json_encode($array);

    }
}
