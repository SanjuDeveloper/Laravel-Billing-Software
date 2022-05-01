
<!DOCTYPE html>
<html>
	<head>
	  <title>Bill</title>
	  <style>
			.page-break
			{
				display: block;
				page-break-before: always;
		    }
		
		 #invoice-POS {
			  box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);
			  padding: 2mm;
			  margin: 0 auto;
			  width:64mm;
			  background: #FFF;
			  margin-top: 22px;
			}
			#invoice-POS ::selection {
			  background: #f31544;
			  color: #FFF;
			}
			#invoice-POS ::moz-selection {
			  background: #f31544;
			  color: #FFF;
			}
			#invoice-POS h1 {
			  font-size: 1.5em;
			  color: #222;
			}
			#invoice-POS h2 {
			  font-size:10px;
			}
			#invoice-POS h3 {
			  font-size: 1.2em;
			  font-weight: 300;
			  line-height: 2em;
			}
			#invoice-POS p {
			  font-size:12px;
			  color: #000;
			  line-height:1.58em;
			}
			#invoice-POS #top, #invoice-POS #mid, #invoice-POS #bot {
			  /* Targets all id with 'col-' */
			  border-bottom: 1px solid #EEE;
			}
			#invoice-POS #top {
			  min-height: 100px;
			}
			#invoice-POS #mid {
			  min-height: 80px;
			}
			#invoice-POS #bot {
			  min-height: 50px;
			}
			#invoice-POS #top .logo {
			     height: 60px;
				width: 77px;
				background: url(http://localhost/Billing-Software/public/images/logo.png) no-repeat;
				background-size: 74px 60px;
			}
			#invoice-POS .info {
			  display: block;
			  margin-left: 0;
			}
			#invoice-POS .title {
			  float: right;
			}
			#invoice-POS .title p {
			  text-align: right;
			}
			#invoice-POS table {
			  width: 100%;
			  border-collapse: collapse;
			}
			#invoice-POS .tabletitle {
			  font-size: .5em;
			  background: #EEE;
			}
			#invoice-POS .service {
			  border-bottom: 1px solid #EEE;
			}
			#invoice-POS .item {
			  width: 24mm;
			}
			#invoice-POS .itemtext {
			  font-size:10px;
			}
			#invoice-POS #legalcopy {
			  margin-top: 5mm;
			}
.payment h2{
	padding-left:10px;
}			
}			
      </style>
	</head>
	<body id="invoice-POS">
		<?php 
	foreach($orders as $data){
		$billNumber = $data['billNumber'];
	}
		?>
	    <div class="container" >
		 <center id="top">
			  <div class="logo"></div>
			  <div class="info"> 
				<h2>Billing Software</h2>
				<p>Noida Sector-62,<br/>U.P. 201307
				</p>
			  </div><!--End Info-->
		  </center><!--End InvoiceTop-->
		  <div id="mid">
			  <div class="info">
				<h2><span style="float:left">Contact Info</span> <span style="float:right">Bill No.{{ $billNumber}}</span></h2>
				<div style="clear:both"></div>
				<p> Name    : SANJU</br>
					Address : NOIDA</br>
					Email   : bhattsanju.it@gmail.com</br>
					Phone   : 97584521330</br>
				</p>
			  </div>
          </div>
		  <div id="bot">
            <div id="table">
                <table>
                    <tr class="tabletitle">
                        <th class="item"><p>Product</p></th>
                        <th class="Rate"><p>Prize</p></th>
					    <th class="Hours"><p>Qty</p></th>
                        <th class="Rate"><p>AMT</p></th>
                    </tr>
                    <tr class="service">
                        <td class="tableitem"><p class="itemtext">20</p></td>
                        <td class="tableitem"><p class="itemtext">30</p></td>
                        <td class="tableitem"><p class="itemtext">40</p></td>
                        <td class="tableitem"><p class="itemtext">50</p></td>
                    </tr>
                    <tr class="service">
                        <td class="tableitem"><p class="itemtext">20</p></td>
                        <td class="tableitem"><p class="itemtext">30</p></td>
                        <td class="tableitem"><p class="itemtext">40</p></td>
                        <td class="tableitem"><p class="itemtext">50</p></td>
                    </tr>
								
                    <tr class="tabletitle">
                        <td colspan="3" class="Rate"><h2 style="float:right">Total Amount</h2></td>
                        <td class="payment"><h2>500</h2></td>
                    </tr>
					<tr class="tabletitle">
                        <td colspan="3" class="Rate"><h2 style="float:right">Discount@</h2></td>
                        <td class="payment"><h2>40</h2></td>
                    </tr>
					<tr class="tabletitle">
                        <td colspan="3" class="Rate"><h2 style="float:right">GST%</h2></td>
                        <td class="payment"><h2>15</h2></td>
                    </tr>
					<tr class="tabletitle">
                        <td colspan="3" class="Rate"><h2 style="float:right">GST@</h2></td>
                        <td class="payment"><h2>18</h2></td>
                    </tr>
					<tr class="tabletitle">
                        <td colspan="3" class="Rate"><h2 style="float:right">Net Payable Amount</h2></td>
                        <td class="payment"><h2>20</h2></td>
                    </tr>

                </table>
            </div>
          <!--End Table-->

                    <div id="legalcopy">
                        <p class="legal"><strong>Thank you for your business!</strong>  Payment is expected within 31 days; please process this invoice within that time. There will be a 5% interest charge per month on late invoices. 
                        </p>
                    </div>

                </div>
		</div>
	</body>
</html>