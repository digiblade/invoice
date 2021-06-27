<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
    body{
        font: 1em sans-serif;
    }
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        text-align:center;
        }
        .text-right{
            text-align:right;
        }
        .text-left{
            text-align:left;
        }
</style>
</head>
<body>
    <table style="width:100%">
        <tbody >
        
            <tr>
                <td colspan="1"><img src="<?php echo base_url("assets/");?>logo2.jpg" height="150px" alt="" srcset=""></td>
                <td colspan="5" class="text-left">
                    <p>BALAJI ENGINEERING SERVICES</p>
                    <p>REGAL SQUARE , FLAT NO 1203, 12TH FLOOR, BLDG NO.05 ,</p>
                    <p>SONALE ROAD, NR. SHIVAJI STADIUM </p>
                    <p>BHADWAD BHIWANDI 421302. </p>
                    <p>EMAIL ID : balajiengg87@gmail.com </p>
                    <p>GST NO:  27AACPE6454G1ZV</p>
                </td>
                <td colspan="2">tax invoice</td>
            </tr>
            <tr>
            <th colspan="6">
                    <h6>TAX INVOICE</h6>
                </th>
                <th colspan="2">
                    <h6>ORIGINAL COPY</h6>
                </th>
            </tr>
            <tr>
                <th colspan="2"> 
                    <p>Invoice No:-</p>
                </th>
                <th colspan="2"> 
                    <p>Invoice Date:-</p>
                </th>
                <th colspan="2"> 
                    <p>PO No:-</p>
                </th>
                <th colspan="2"> 
                    <p>PO Date:-</p>
                </th>
            </tr>
            <tr>
                <td colspan="2"> 
                    <p>BES/2122/INV-10</p>
                </td>
                <td colspan="2"> 
                    <p>22-05-2021</p>
                </td>
                <td colspan="2"> 
                    <p>2201007314</p>
                </td>
                <td colspan="2"> 
                    <p>15-04-2021</p>
                </td>
            </tr>
            <tr>
                <th colspan="2">
                    CUSTOMER
                </th>
                <th >
                    CHALLAN NO 	
                </th>
                <th >
                    DATE
                </th>
            </tr>
            <tr>
                <th colspan="2">
                "DRT-ANTHEA AROMA CHEMICALS PRIVATE LIMITED (UNIT -II)
                Plot No. 51A/1 Roha Industrial Area,
                Village-Roth Budruk, Tal: Roha
                Dist.: Raigad - 402 116, INDIA"			
			</th>
                <th >
                    CHALLAN NO 	
                </th>
                <th >
                    DATE
                </th>
            </tr>
            <tr>
                <th>Sr./no</th>
                <th>HSN / SAC CODE</th>
                <th>DESCRIPTION</th>
                <th>No of Description &packages</th>
                <th>Qty</th>
                <th>Unit</th>
                <th>UNIT PRICE IN INR</th>
                <th>TOTAL PRICE IN INR</th>
            </tr>
        </tbody>
    </table>
</body>
</html>