<?php 

namespace App\Http\Controllers\ExtraActions;

use App\Http\Controllers\Controller;
use App\Client;
use PDF;

class ClientPdf extends Controller
{
	public function __invoke()
	{

		$client = Client::get();
		$pdf = PDF::loadview('clients.list_pdf', compact('clients'));
		return $pdf->download('lista.pdf');
	}
}



?>