<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('resources\views\users\loans\bootstrap.min.css') }}" media="all">

    <style>

        @page { margin: 0cm 0cm; }
        body {
            margin-top:    1cm;
            margin-bottom: 1cm;
            margin-left:   2cm;
            margin-right:  2cm;
            background-color: #fff;
        }
        #watermark {
            position: fixed;
            top: 45%;
            width:    21cm;
            height:   28cm;
            opacity: 0.1;
            z-index:  -1000;
        }
        #logo {
            opacity: 1;
            z-index:  1000;
        }
        header, footer {
            width: 100%;
            /* text-align: center; */
            /* padding: 10px; */
            /* position: absolute; */
        }
        header {
            top: 0px;
            color: white;
            line-height: 35px;
        }
        footer {
            bottom: 0px; 
            position: absolute;
            background-color: #f04800;
            border-radius: 8px;
            color: white;
            /* line-height: 35px; */
            padding:0px;
            margin: 0px;
        }
        
        td {
            /* border:1px dotted orange; */
        }
    </style>

</head>
<body>
    <header>
        <div class="col-md-12" style="margin-top:5px">
            <span><img id="logo" src="{{ asset('public/pages/assets/img/core-img/logo2.png') }}" width="160" /></span>
            <span style="color:#000;font-size:11px;margin-left:410px;margin-top:-10px">Ref #:1234567890</span><br>
            <span style="color:#000;font-size:11px;margin-left:590px;margin-bottom:-10px">Date: {{ date("d/m/y") }}</span>
        </div>
        <hr>
    </header>

    <main style="margin-top:-40px"> 
        {{-- <div class="row"> --}}
        <div id="watermark" style="margin-top:50px"><img src="{{ asset('public/pages/assets/img/core-img/logo2.png') }}" width="100%" /></div>
        <h4 style="color:#000;text-align:center;text-decoration: underline;margin-bottom:-20px"> <b>{{ $heading }}</b> </h4>
    {{-- <div class="col-xs-12 col-lg-12 col-md-12">   --}}
        <br>

        <table>
            <thead>
                <tr>
                    <td colspan="2"><h4 style="text-decoration: underline;text-align:left">Funding Information</h4></td>
                    <td style="padding: 0px 50px 0px;"></td>
                    <td colspan="2"><h4 style="text-decoration: underline;text-align:left">Company Information</h4></td>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td colspan="2" style="text-align:left"><span>How much Finance is needed?</span><br><span><b>£{{ number_format($loanInfo->loan_amount,2) }}</b></span></td>
                    <td></td>
                    <td colspan="2" style="text-align:left"><span>Company:</span><br><span><b>{{ $clientInfo->company['company'] }}</b></span></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:left"><span>What is the finance for?</span><br><span><b>{{ $loanInfo->purpose['purpose'] }}</b></span></td>
                    <td></td>
                    <td colspan="2" style="text-align:left"><span>Industry Sector:</span><br><span><b>{{ $clientInfo->company->industry['industry'] }}</b></span></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:left"><span>How long is the finance required for?</span><br><span><b>{{ $loanInfo->duration['duration'] }}</b></span></td>
                    <td></td>
                    <td colspan="2" style="text-align:left"><span>Trading for:</span><br><span><b>{{ $clientInfo->company->trading_for['trade_for'] }}</b></span></td>
                </tr>
                <?php
                    $date = strtotime($loanInfo->created_at);
                    $dd = date("jS M, Y", $date);
                ?>
                <tr>
                    <td colspan="2" style="text-align:left"><span>Date of application:</span><br><span><b>{{ $dd }}</b></span></td>
                    <td></td>
                    <td colspan="2" style="text-align:left"><span>Annual Business Revenue:</span><br><span><b>{{ $clientInfo->company->revenue['revenue'] }}</b></span></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td colspan="2" style="text-align:left"><span>Is the company profitable:</span><br><span><b> @if($clientInfo->company['profitable'] === 1) Yes @else No @endif </b></span></td>
                    <td style="text-align:left"></td>
                </tr>
                

                <tr>
                    <td colspan="2"><h4 style="text-decoration: underline;text-align:left">Contact Information</h4></td>
                    <td></td>
                    <td colspan="2" style="text-align:left"><span>Business Address line 1:</span><br><span><b>{{ $clientInfo->company['address_one'] }}</b></span></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:left"><span>Name:</span><br><span><b>{{ $clientInfo->first_name." ".$clientInfo->last_name }}</b></span></td>
                    <td></td>
                    <td colspan="2" style="text-align:left"><span>Business Line Address 2:</span><br><span><b>{{ $clientInfo->company['address_two'] }}</b></span></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:left"><span>Role at Company:</span><br><span><b>{{ $clientInfo->role['role'] }}</b></span></td>
                    <td></td>
                    <td colspan="2" style="text-align:left"><span>Post code:</span><br><span><b>{{ $clientInfo->company['zip'] }}</b></span></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:left"><span>Preferred phone:</span><br><span><b>{{ $clientInfo->phone }}</b></span></td>
                    <td></td>
                    <td colspan="2" style="text-align:left"><span>Country:</span><br><span><b>{{ $clientInfo->company->country['country'] }}</b></span></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:left"><span>Email Address:</span><br><span><b>{{ $clientInfo->email }}</b></span></td>
                    <td></td>
                    <td colspan="2" style="text-align:left"><span>Business phone:</span><br><span><b>{{ $clientInfo->company['business_phone'] }}</b></span></td>
                </tr>
                <tr style="line-height: 14px;">
                    <td colspan="4" style="height: 24px"></td>
                </tr>
                <tr>
                    <td colspan="5"><span style="text-decoration: underline;text-align:left"><b>Account Manager Notes:</b></span><br><br>
                        <span style="text-align:justify">
                            @if ($loanInfo->loan_notes !== null) {{ $loanInfo->loan_notes }} @else Notes Unavailable! @endif
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
                        
    </main>

    <footer>
        {{-- <table style="margin:0px;padding:0px">
            <tbody style="margin:0px;padding:0px">
                <tr style="margin:0px;padding:0px">
                    <td colspan="4" style="margin:0px;padding:0px"><span style="text-align:left;font-size:10px;margin:0px;padding:0px">Fundlion Ltd.</span><span style="text-align:right;font-size:10px;margin:0px;padding:0px">Email: info@fundlion.com</span></td>
                </tr>
                <tr style="margin:0px;padding:0px">
                    <td style="margin:0;padding:0"><span style="text-align:left;font-size:10px;margin:0px;padding:0px">20-22 Wenlock Road, N1 7GU, London</span><span style="text-align:right;font-size:10px;margin:0px;padding:0px">Phone: +44 203 1980 126</span></td>
                </tr>
            </tbody>
        </table>  --}}
        <h5 class="text-center" style="text-align:center;padding:5px 0px;margin:0px ">Fundlion Ltd.<br>20-22 Wenlock Road, N1 7GU, London</h5>
    </footer>
    
    
</body>
</html>