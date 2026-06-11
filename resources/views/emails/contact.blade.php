<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #1E6BFF; color: white; padding: 10px 20px; text-align: center; }
        .content { background-color: #f9f9f9; padding: 20px; border-radius: 5px; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #555; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>New Contact Form Submission</h2>
        </div>
        <div class="content">
            <div class="field">
                <div class="label">Name:</div>
                <div>{{ $data['name'] }}</div>
            </div>
            <div class="field">
                <div class="label">Email:</div>
                <div>{{ $data['email'] }}</div>
            </div>
            <div class="field">
                <div class="label">Phone:</div>
                <div>{{ $data['phone'] ?? 'Not provided' }}</div>
            </div>
            <div class="field">
                <div class="label">Service Needed:</div>
                <div>{{ $data['service'] }}</div>
            </div>
            <div class="field">
                <div class="label">Budget Range:</div>
                <div>{{ $data['budget'] }}</div>
            </div>
            <div class="field">
                <div class="label">Description:</div>
                <div>{!! nl2br(e($data['description'])) !!}</div>
            </div>
        </div>
    </div>
</body>
</html>
