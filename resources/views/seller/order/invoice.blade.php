<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Invoice</title>

    <style type="text/css">
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        table{
            font-size: x-small;
        }
        #item td{
            text-align: center;
        }
        #detail td{
            text-align: center;
        }

        .gray {
            background-color: lightgray
        }
        .table-borderless > tbody > tr > td,
        .table-borderless > tbody > tr > th,
        .table-borderless > tfoot > tr > td,
        .table-borderless > tfoot > tr > th,
        .table-borderless > thead > tr > td,
        .table-borderless > thead > tr > th {
            border: none;
        }
    </style>

</head>
<body>

<table width="100%">
    <tr>
        <td valign="top"><img src="{{public_path('frontend/images/logo/logo.jpg')}}" alt="" width="150"/></td>
        <td align="right">
            <h3>Yeasin City Housing Ltd.</h3>
            <pre>
                info@ychlbd.com
                +8801719738512
                House No.209 (1st Floor)
                Hatu Mia Len, College Road
                Bogura
            </pre>
        </td>
    </tr>

</table>
@foreach($order as $row)

    <p style="text-align: right;" >Order ID: #{{$row->order_code}}</p>
    <p style="text-align: right;" >Order Date: {{$row->order_date}}</p>

    <pre>
       <b>Customer Information:</b>

        {{$row->users->name}}
        {{$row->users->email}}
        {{$row->users->phone}}
    </pre>

    <br/>

    <table width="100%" id="item">
        <thead style="background-color: lightgray;">
        <tr>
            <th>Project Name</th>
            <th>Property Name</th>
            <th>Property Location</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$row->projects->project_name}}</td>
            <td>{{$row->properties->property_name}}</td>
            <td>{{$row->properties->location}}</td>
        </tr>

        </tbody>
    </table>

    <br/>

    <table width="100%" id="detail">
        <thead style="background-color: lightgray;">
        <tr>
            <th>Description</th>
            <th>Amount</th>
        </tr>

        </thead>
        <tbody>
        <tr>
            <td>Property Price:</td>
            <td>{{$row->properties->price}} TK</td>
        </tr>
        <tr>
            <td>Booking Amount :</td>
            <td>{{$row->booking_amount}} TK </td>
        </tr>
        <tr>
            <td> Due :</td>
            <td>{{$row->properties->price - $row->booking_amount}}  TK</td>
        </tr>
        </tbody>

    </table>
@endforeach

<table width="100%" class="table table-borderless" style="margin-top: 200px">
    <tbody>
    <tr>
        <td>Customer Signature</td>
        <td style="text-align: right">Authorize Signature</td>
    </tr>

    </tbody>


</table>

</body>
</html>
