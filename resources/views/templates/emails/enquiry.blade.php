<!DOCTYPE html>
<html>
<head>
    <title>Artemirate-Intl.com</title>
</head>
<body>
    <h1>New Product Enquiry from Artemirate-Intl.com</h1>
    <p>Sender: {{ $maildata->first_name }} {{ $maildata->last_name }}</p>
    <p>Sender Email: {{ $maildata->email }}</p>
    <p>Sender Contact: {{ $maildata->contact }}</p>
    <p>Product SKU: {{ $maildata->sku }}</p>
    <p>Product Qty: {{ $maildata->qty }}</p>
    <p>Sender Message: {{ $maildata->message }}</p>
    <br><br>
    <p>Thanks</p>
    <p>Artemirate-Intl.com</p>
</body>
</html>