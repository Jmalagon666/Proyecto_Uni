<style>
        .logo {
            width: 200px;
            height: auto;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
            margin-bottom: 20px;
            padding-top: 10px;
            padding-bottom: 10px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s;
        }
        .logo:hover {
            transform: scale(1.05);
        }
        .logo:active {
            transform: scale(0.95);
        }
        .logo:focus {
            outline: none;
            box-shadow: 0 0 0 4px rgba(0, 123, 255, 0.5);
        }                   
        .logo:focus-visible {
            outline: none;
            box-shadow: 0 0 0 4px rgba(0, 123, 255, 0.5);
        }
        .logo:focus:not(:focus-visible) {
            box-shadow: none;
        }
        .logo:focus:not(:focus-visible) {
            outline: none;
        }
        .logo:focus-visible {
            outline: none;
            box-shadow: 0 0 0 4px rgba(0, 123, 255, 0.5);
        }
        .logo:focus:not(:focus-visible) {
            box-shadow: none;
        }
        .logo:focus-visible {
            outline: none;
            box-shadow: 0 0 0 4px rgba(0, 123, 255, 0.5);
        }
        .logo:focus:not(:focus-visible) {
            box-shadow: none;
        }           
    </style>
<a href="/">
    <img src="{{ asset('img/logo.jpg') }}" alt="RGMC Logo" class="logo"/>
</a>
