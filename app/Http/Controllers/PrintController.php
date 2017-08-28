<?php
/* Change to the correct path if you copy this example! */


namespace App\Http\Controllers;
require base_path('\vendor\autoload.php');


use Illuminate\Http\Request;
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;

use Mike42\Escpos\PrintConnectors\CupsPrintConnector;
use App\Http\Requests\PrintRequest;

class PrintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PrintRequest $request)
    {
        return "hello";
    }
}

// try {
//     $connector = new CupsPrintConnector("EPSON_TM-T20");

    
    
// 	/* Print a "Hello world" receipt" */
    
// 	$printer = new Printer($connector);
    
	
// 	$items = [];
// 	$subtotal = new item();
// 	$discount = new item();
// 	$grandtotal = new item();
// 	$comment = new item();
	
// 	$date = date("D jS M Y\nh:i:s A");

// 	$printer -> setJustification(Escpos::JUSTIFY_CENTER);
// 	$printer -> selectPrintMode(Escpos::MODE_DOUBLE_WIDTH);
// 	$printer -> text("Charcoaloo\n");
// 	$printer -> selectPrintMode();
// 	$printer -> text("Address\n");
// 	$printer -> text("Cell\n");
// 	$printer -> feed();

// 	$printer -> setEmphasis(true);
// 	$printer -> text("SALES INVOICE\n");
// 	$printer -> setEmphasis(false);

// 	$printer -> setJustification(Escpos::JUSTIFY_LEFT);
// 	$printer -> setEmphasis(true);
// 	$printer -> text(new item('Item','Qty','£'));
// 	$printer -> setEmphasis(false);

// 	foreach($items as $item) {
//     		$printer -> text($item);
// 	}

// 	$printer -> setEmphasis(true);
// 	$printer -> text($subtotal);
// 	$printer -> setEmphasis(false);
// 	$printer -> feed();

// 	$printer -> text($discount);
// 	$printer -> selectPrintMode(Escpos::MODE_DOUBLE_WIDTH);
// 	$printer -> text($grandtotal);
// 	$printer -> selectPrintMode();

// 	$printer -> feed(2);
// 	$printer -> setJustification(Escpos::JUSTIFY_CENTER);
// 	$printer -> text($comment."\n");
// 	$pirnter -> text("Thanks for being with us. Come again\n");
// 	$printer -> feed(2);
// 	$printer -> text($date . "\n");

// 	$printer -> cut();
// 	$printer -> pulse();
	
// 	 /* Close printer */
    
// 	$printer -> close();

// } 
// catch (Exception $e) {

//     echo "Couldn't print to this printer: " . $e -> getMessage() . "\n";

// }

// class item{
// 	private $name;
// 	private $quantity;
//     	private $price;
//     	private $poundSign;

// 	public function __construct($name = '', $quantity = '', $price = '', $poundSign = false) {
//         	$this -> name = $name;
// 		$this -> quantity = $quantity;
//         	$this -> price = $price;
//         	$this -> poundSign = $poundSign;
//     	}

// 	public function __toString(){
	
// 		$rightCols = 7;
// 		$midCols = 3;
//         $leftCols = 28;

// 		if($this -> poundSign) {
//             		$leftCols = 6;
//       		  }
		

// 		$left = str_pad($this -> name, $leftCols) ;

//         	$sign = ($this -> poundSign ? '£' : '');
//         	$right = str_pad($sign . $this -> price, $rightCols, ' ', STR_PAD_LEFT);
//         	return "$left$right\n";
	
// 	}
// }