<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">

    </head>
    <style>
        #guzik{
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
    </style>
    <body>
        <h2>Aktywuj swoje konto na www.????.pl</h2>

        <div>
            Dziękujemy, za rejestracje w naszym serwisie. Kliknij przycisk aby aktywować konto
            <br/><p></p>
            {{ URL::to('registration/verify/' . $confirmation_code) }}
            <form action={{ URL::to('registration/verify/' . $confirmation_code) }}>
                <input type="submit" id='guzik' value="Weryfikuj" />
            </form>
            <p></p>Zapraszamy do korzystania z usług.
        </div>

    </body>
</html>
