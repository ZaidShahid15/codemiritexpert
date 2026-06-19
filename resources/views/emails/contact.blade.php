<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Inquiry | Codemir IT Experts</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #03030F;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            color: #E2E8F0;
            -webkit-font-smoothing: antialiased;
        }
        .wrapper {
            width: 100%;
            background-color: #03030F;
            padding: 40px 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #0A0A16;
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        }
        .header {
            background: linear-gradient(135deg, #1E6BFF 0%, #0D0D1A 100%);
            padding: 40px 30px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            position: relative;
        }
        .header h1 {
            margin: 0;
            font-size: 26px;
            font-weight: 700;
            color: #FFFFFF;
            letter-spacing: -0.02em;
        }
        .header p {
            margin: 10px 0 0 0;
            font-size: 14px;
            color: #94A3B8;
            text-transform: uppercase;
            letter-spacing: 0.15em;
            font-weight: 600;
        }
        .content {
            padding: 40px 30px;
        }
        .section-title {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: #1E6BFF;
            font-weight: 700;
            margin-bottom: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            padding-bottom: 8px;
        }
        .grid {
            margin-bottom: 30px;
        }
        .grid-row {
            padding: 12px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.03);
        }
        .grid-row:last-child {
            border-bottom: none;
        }
        .label {
            font-size: 13px;
            color: #64748B;
            font-weight: 500;
            width: 150px;
            display: inline-block;
            vertical-align: top;
        }
        .value {
            font-size: 14px;
            color: #F8FAFC;
            font-weight: 600;
            display: inline-block;
            max-width: 390px;
        }
        .badge {
            display: inline-block;
            padding: 4px 12px;
            background-color: rgba(30, 107, 255, 0.15);
            border: 1px solid rgba(30, 107, 255, 0.3);
            border-radius: 20px;
            color: #38BDF8;
            font-size: 12px;
            font-weight: 600;
        }
        .budget-badge {
            display: inline-block;
            padding: 4px 12px;
            background-color: rgba(16, 185, 129, 0.15);
            border: 1px solid rgba(16, 185, 129, 0.3);
            border-radius: 20px;
            color: #34D399;
            font-size: 12px;
            font-weight: 600;
        }
        .description-box {
            background-color: #070710;
            border: 1px solid rgba(255, 255, 255, 0.03);
            border-radius: 16px;
            padding: 24px;
            margin-top: 10px;
        }
        .description-text {
            font-size: 14px;
            line-height: 1.6;
            color: #CBD5E1;
            margin: 0;
            white-space: pre-line;
        }
        .footer {
            background-color: #05050C;
            padding: 30px;
            text-align: center;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }
        .footer-logo {
            font-size: 16px;
            font-weight: 700;
            color: #FFFFFF;
            margin-bottom: 6px;
        }
        .footer-logo span {
            color: #1E6BFF;
        }
        .footer p {
            margin: 0;
            font-size: 12px;
            color: #475569;
        }
        .reply-button {
            display: inline-block;
            margin-top: 25px;
            background-color: #1E6BFF;
            color: #FFFFFF !important;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            padding: 12px 32px;
            border-radius: 30px;
            transition: background-color 0.3s;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="header">
                <p>Codemir IT Experts</p>
                <h1>New Project Inquiry</h1>
            </div>
            
            <div class="content">
                <div class="section-title">Client Details</div>
                <div class="grid">
                    <div class="grid-row">
                        <div class="label">Client Name:</div>
                        <div class="value">{{ $data['name'] }}</div>
                    </div>
                    <div class="grid-row">
                        <div class="label">Email Address:</div>
                        <div class="value">
                            <a href="mailto:{{ $data['email'] }}" style="color: #38BDF8; text-decoration: none;">{{ $data['email'] }}</a>
                        </div>
                    </div>
                    <div class="grid-row">
                        <div class="label">Phone / WhatsApp:</div>
                        <div class="value">{{ $data['phone'] ?? 'Not Provided' }}</div>
                    </div>
                </div>

                <div class="section-title">Project Details</div>
                <div class="grid">
                    <div class="grid-row">
                        <div class="label">Service Required:</div>
                        <div class="value">
                            <span class="badge">{{ $data['service'] }}</span>
                        </div>
                    </div>
                    <div class="grid-row">
                        <div class="label">Estimated Budget:</div>
                        <div class="value">
                            <span class="budget-badge">{{ $data['budget'] }}</span>
                        </div>
                    </div>
                </div>

                <div class="section-title">Project Brief</div>
                <div class="description-box">
                    <p class="description-text">{!! nl2br(e($data['description'])) !!}</p>
                </div>

                <div style="text-align: center;">
                    <a href="mailto:{{ $data['email'] }}" class="reply-button">Reply to Client</a>
                </div>
            </div>

            <div class="footer">
                <div class="footer-logo">Codemir<span>IT</span></div>
                <p>© {{ date('Y') }} Codemir IT Experts. All rights reserved.</p>
            </div>
        </div>
    </div>
</body>
</html>
