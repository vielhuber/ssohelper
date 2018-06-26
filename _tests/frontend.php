<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />
    <script src="ssohelper.js"></script>
    <title>.</title>
    <script>
    document.addEventListener('DOMContentLoaded', function()
    {
        let ssohelper = new window.ssohelper({
            'auth_server': 'http://example-auth-server.local',
            'pages': [
                'http://example-auth-page1.local',
                'http://example-auth-page2.local',
                'http://example-auth-page3.local'
            ]
        });
        
        document.querySelector('.isLoggedIn').addEventListener('click', (e) =>
        {
            console.log( ssohelper.isLoggedIn() );
            e.preventDefault();
        }, false);

        document.querySelector('.getPayload').addEventListener('click', (e) =>
        {
            console.log( ssohelper.getPayload() );
            e.preventDefault();
        }, false);

        document.querySelector('.getUserId').addEventListener('click', (e) =>
        {
            console.log( ssohelper.getUserId() );
            e.preventDefault();
        }, false);

        document.querySelector('.fetch1').addEventListener('click', (e) =>
        {
            ssohelper.fetch('http://example-auth-page1.local/protected/', { method: 'GET' }).then(res => res.json()).catch(error => error).then(response => console.log(response));
            e.preventDefault();
        }, false);

        document.querySelector('.fetch2').addEventListener('click', (e) =>
        {
            ssohelper.fetch('http://example-auth-page2.local/protected/', { method: 'GET' }).then(res => res.json()).catch(error => error).then(response => console.log(response));
            e.preventDefault();
        }, false);

        document.querySelector('.fetch3').addEventListener('click', (e) =>
        {
            ssohelper.fetch('http://example-auth-page3.local/protected/', { method: 'GET' }).then(res => res.json()).catch(error => error).then(response => console.log(response));
            e.preventDefault();
        }, false);

        document.querySelector('.login').addEventListener('click', (e) =>
        {
            ssohelper.login().then(() => { console.log('logged in!'); });
            e.preventDefault();
        }, false);

        document.querySelector('.logout').addEventListener('click', (e) =>
        {
            ssohelper.logout().then(() => { console.log('logged out!'); });
            e.preventDefault();
        }, false);        
    });
    </script>
    <style>

    </style>
</head>
<body>

    <ul>
        <li>
            <a href="#" class="login">login()</a>
        </li>
        <li>
            <a href="#" class="isLoggedIn">isLoggedIn()</a>
        </li>
        <li>
            <a href="#" class="getPayload">getPayload()</a>
        </li>
        <li>
            <a href="#" class="getUserId">getUserId()</a>
        </li>
        <li>
            <a href="#" class="fetch1">fetch() from page1</a>
        </li>
        <li>
            <a href="#" class="fetch2">fetch() from page2</a>
        </li>
        <li>
            <a href="#" class="fetch3">fetch() from page3</a>
        </li>
        <li>
            <a href="#" class="logout">logout()</a>
        </li>
        <li>
            <a href="http://example-auth-page1.local/">go to page1</a>
        </li>
        <li>
            <a href="http://example-auth-page2.local/">go to page2</a>
        </li>
        <li>
            <a href="http://example-auth-page3.local/">go to page3</a>
        </li>
    </ul>
    
</body>
</html>