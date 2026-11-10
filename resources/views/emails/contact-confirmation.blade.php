<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We Received Your Message | Codemir IT Experts</title>
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
            padding: 40px 15px;
            box-sizing: border-box;
        }
        .container {
            max-width: 580px;
            margin: 0 auto;
            background-color: #0A0A16;
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
        }
        .header {
            background: linear-gradient(135deg, #1E6BFF 0%, #0D0D1A 100%);
            padding: 36px 28px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 700;
            color: #FFFFFF;
            letter-spacing: -0.02em;
        }
        .header p {
            margin: 8px 0 0 0;
            font-size: 13px;
            color: #CBD5E1;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            font-weight: 600;
        }
        .content {
            padding: 32px 28px;
        }
        .greeting {
            font-size: 18px;
            font-weight: 600;
            color: #FFFFFF;
            margin-bottom: 14px;
        }
        .paragraph {
            font-size: 15px;
            line-height: 1.7;
            color: #94A3B8;
            margin: 0 0 16px 0;
        }
        .highlight-box {
            background-color: rgba(30, 107, 255, 0.08);
            border: 1px solid rgba(30, 107, 255, 0.25);
            border-radius: 14px;
            padding: 18px 20px;
            margin: 24px 0;
        }
        .highlight-title {
            font-size: 14px;
            font-weight: 700;
            color: #60A5FA;
            margin: 0 0 6px 0;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        .highlight-text {
            font-size: 14px;
            color: #E2E8F0;
            margin: 0;
            line-height: 1.6;
        }
        .summary-box {
            background-color: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius: 12px;
            padding: 16px 20px;
            margin: 20px 0;
        }
        .summary-item {
            font-size: 13px;
            color: #94A3B8;
            padding: 6px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.04);
        }
        .summary-item:last-child {
            border-bottom: none;
        }
        .summary-label {
            color: #CBD5E1;
            font-weight: 600;
        }
        .footer {
            background-color: #050510;
            padding: 24px 28px;
            text-align: center;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            font-size: 12px;
            color: #64748B;
            line-height: 1.6;
        }
        .footer a {
            color: #60A5FA;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="header">
                <h1>Codemir IT Experts</h1>
                <p>Request Received</p>
            </div>

            <div class="content">
                <div class="greeting">Hello {{ $data['name'] }},</div>
                <p class="paragraph">
                    Thank you for reaching out to us. We have successfully received your inquiry and our engineering team is currently reviewing your project details.
                </p>

                <div class="highlight-box">
                    <div class="highlight-title">⏱ Next Step</div>
                    <p class="highlight-text">
                        A senior team member will get back to you <strong>within 24 hours</strong> with initial feedback or a project proposal.
                    </p>
                </div>

                <div class="summary-box">
                    <div class="summary-item">
                        <span class="summary-label">Service Interested In:</span> {{ $data['service'] ?? 'General Inquiry' }}
                    </div>
                    @if(!empty($data['budget']))
                    <div class="summary-item">
                        <span class="summary-label">Estimated Budget:</span> {{ $data['budget'] }}
                    </div>
                    @endif
                    @if(!empty($data['description']))
                    <div class="summary-item">
                        <span class="summary-label">Your Message:</span><br>
                        <span style="display: block; margin-top: 4px; color: #CBD5E1; font-style: italic;">"{{ Str::limit($data['description'], 180) }}"</span>
                    </div>
                    @endif
                </div>

                <p class="paragraph" style="margin-top: 20px;">
                    If your request is urgent, you can also reach us directly via WhatsApp at
                    <a href="https://wa.me/923268634963" style="color: #60A5FA; text-decoration: none; font-weight: 600;">+92 326 8634963</a>.
                </p>

                <p class="paragraph" style="margin-bottom: 0;">
                    Best regards,<br>
                    <strong style="color: #FFFFFF;">Zaid Shahid &amp; The Codemir Team</strong><br>
                    <span style="font-size: 13px; color: #64748B;">Codemir IT Experts — High-Performance Web &amp; AI Systems</span>
                </p>
            </div>

            <div class="footer">
                &copy; {{ date('Y') }} Codemir IT Experts. All rights reserved.<br>
                <a href="https://codemiritexpert.online">codemiritexpert.online</a>
            </div>
        </div>
    </div>
</body>
</html>
