<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Message</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #333333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .email-container {
            background-color: #ffffff;
            border-radius: 4px;
            padding: 30px;
            border-top: 4px solid #3498db;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        .header {
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eeeeee;
        }
        .header h2 {
            margin: 0;
            color: #2c3e50;
            font-weight: 500;
        }
        .content {
            margin-bottom: 25px;
        }
        .content p {
            margin: 8px 0;
        }
        .message {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 4px;
            margin-top: 10px;
        }
        .footer {
            font-size: 12px;
            color: #7f8c8d;
            margin-top: 30px;
            text-align: center;
        }
        strong {
            color: #2c3e50;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h2>New Contact Message</h2>
        </div>
        
        <div class="content">
            <p><strong>Name:</strong> {{ $data['name'] }}</p>
            <p><strong>Email:</strong> {{ $data['email'] }}</p>
            <p><strong>Message:</strong></p>
            <div class="message">
                {{ $data['message'] }}
            </div>
        </div>
        
        <div class="footer">
            <p>This is an automated notification from your contact form.</p>
        </div>
    </div>
</body>
</html>