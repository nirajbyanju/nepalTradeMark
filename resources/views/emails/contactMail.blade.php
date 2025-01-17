<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            background: #1C4980;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        .email-body {
            padding: 20px;
            line-height: 1.6;
        }
        .email-body h2 {
            margin-top: 0;
            color: #1C4980;
        }
        .email-footer {
            background: #f4f4f9;
            padding: 15px;
            text-align: center;
            font-size: 14px;
            color: #666;
        }
        .email-footer a {
            color: #1C4980;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h1>New Contact Request</h1>
        </div>
        <div class="email-body">
            <h2>Hello, Nepal Trademark Attorneys,</h2>
            <p>Nepal Trademark Attorneys get a new contact request from Client. Please find the details below:</p>
            <ul>
                <li><strong>Name:</strong> {{ $data['name'] }}</li>
                <li><strong>Email:</strong> {{ $data['email'] }}</li>
                <li><strong>Phone Number:</strong> {{ $data['phone_number'] }}</li>
                <li><strong>Company Name:</strong> {{ $data['company_name'] }}</li>
            </ul>
            <p><strong>Message:</strong></p>
            <p>{{ $data['message'] }}</p>
        </div>
        <div class="email-footer">
            <p>&copy; {{ date('Y') }} Your Company. All Rights Reserved.</p>
            <p><a href="{{ url('https://nepaltrademarkattorneys.com') }}">Visit our website</a></p>
        </div>
    </div>
</body>
</html>

