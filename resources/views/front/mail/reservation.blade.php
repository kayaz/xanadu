<html>
<head>
    <title>{{ config('app.name') }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style>a{text-decoration: none}table img{display: block;border: 0;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;}table tr{border-collapse: collapse;}table p{margin: 0;-webkit-text-size-adjust: none;-ms-text-size-adjust: none;mso-line-height-rule: exactly;line-height: 190%}</style></head>
<body style="background-color:#113f63;padding:0;margin:0">
<table align="center" border="0" cellpadding="0" cellspacing="0" style="margin:0 auto;width:100%;padding:0;border-collapse:collapse;background-color:#113f63">
    <tr>
        <td style="padding:30px">
            <table align="center" cellpadding="0" cellspacing="0" border="0" width="600" style="margin:0 auto;width:600px;padding:0;border-collapse:collapse">
                <tr>
                    <td align="center">
                        <img style="width:214px;height:89px;border:0" width="214" height="89" border="0" src="{{ asset('/images/xanadu-logo.png') }}" alt="Xanadu Restort">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td style="padding:0 30px">
            <table align="center" cellpadding="0" cellspacing="0" border="0" width="600" style="margin:0 auto;width:600px;padding:0;border-collapse:collapse;background:white">
                <tr>
                    <td style="font-family:Arial;font-size:14px;padding:25px 30px;line-height:24px">
                        <p style="text-align:center">{{ config('app.name') }}</p>
                        <p><b>Wiadomość wysłana: <?= date("d.m.Y - H:i:s"); ?></b></p>
                        <hr style="border:0;border-bottom:1px solid #ececec" />
                        <p><b>Imię:</b> {{ $request->form_name }}</p>
                        <p><b>E-mail:</b> {{ $request->form_email }}</p>
                        @isset($request->form_phone)<p style="margin:0"><b>Telefon:</b> {{ $request->form_phone }}</p>@endisset
                        <hr style="border:0;border-bottom:1px solid #ececec" />
                        <p><b>Rezerwacja od:</b> {{ $request->form_data_start }}</p>
                        <p><b>Rezerwacja do:</b> {{ $request->form_data_end }}</p>
                        <p><b>Domek / pokój:</b> {{ form_offer_type($request->form_room_type) }}</p>
                        <p><b>Dorośli:</b> {{ $request->form_adult_count }}</p>
                        <p><b>Dzieci (3-12):</b> {{ $request->form_child_count }}</p>
                        <p><b>Dzieci (0-3):</b> {{ $request->form_kid_count }}</p>
                        @isset($request->form_food)<p><b>Wyżywienie:</b> {{ form_food_type($request->form_food) }}</p>@endisset
                        @if($request->form_message)
                        <hr style="border:0;border-bottom:1px solid #ececec" />
                        <p>{{ $request->form_message }}</p>
                        @endif
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td style="height: 100px" height="100">&nbsp;</td>
    </tr>
</table>
</body>
</html>
