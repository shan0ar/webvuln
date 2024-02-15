<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4caf50;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        h2 {
            color: #333;
        }
    </style>
</head>
<body>

    <h2>Coffre Fort Intranet</h2>

    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Machine - IP</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>prestaSRV</td>
                <td>Jesuispresta35!</td>
                <td>SRV-RBD - 192.168.3.109</td>
                <td>C'est le compte RDP d'un prestataire informatique</td>
            </tr>
            <tr>
                <td>admin</td>
                <td>webadmin</td>
                <td>192.168.3.103</td>
                <td>Interface d'admin à l'intranet</td>
            </tr>
            <tr>
                <td>1 631 249 355</td>
                <td>frerejacques</td>
                <td>PC-User2 - 192.168.3.12</td>
                <td>C'est un accès Anydesk permanent à la machine PC-User2, c'est l'accès d'un prestataire</td>
            </tr>
            <tr>
                <td>Administrateur</td>
                <td>PAOK47.0!:;kOJI</td>
                <td>192.168.3.102</td>
                <td>C'est l'ancien mot de passe de l'administrateur du domaine</td>
            </tr>
            <tr>
                <td>thomas-ftp</td>
                <td>5TR0NG-P4$$WORD35!</td>
                <td>192.168.30.103</td>
                <td>C'est le compte FTP de l'autre pour se connecter au FTP très sécurisé</td>
            </tr>
            <tr>
                <td>thomas-ssh</td>
                <td>-----BEGIN OPENSSH PRIVATE KEY-----

b3BlbnNzaC1rZXktdjEAAAAACmFlczI1Ni1jdHIAAAAGYmNyeXB0AAAAGAAAABBt7eb0Lz

mI5PcFUVaLrgq6AAAAGAAAAAEAAAEXAAAAB3NzaC1yc2EAAAADAQABAAABAQC/EVttTXGD

nX5k0cgop5bA9+S4LrYQaGnc4lXn0xh9JKIoQ53x0A/PLPZ9xxPbxmTpnX9u9EvGp8z5tl

SROR+Ii0qTTP9EoMZMd/ZUr37gSrZWcYZUk+orRjnFHwJyzHuw8/rBU7WKuvYIpWe+Av1/

WnpXTbz4zN8EOdrDvPYodrJwpXBKP6dlBSe7CukZGTu3Xjb2yZ6jQzsMc1zSfGrIWBQoS4

htKnoSAjkK/styQMX3t+j0s3unVlfin2qvQ6HJl6Kd5wNC3lj0KNuF2vUxS/Ix2lZ9mHD/

BMaQdHuROO/rai5Vt6pTv/NKF9Oy29tG1ccL62yRcwfi1ryyBpI7AAADwMTYoDGKNKvIk2

uLKbyDRFwBL0lpKRgr16qZwxeN1ytXuugjfmzg/gmzZ25MvsKt3XUTb0KKSo+AYoyviLuC

IVTRT/cfOuwYnWSlw8IL5msJ6IxZmK2MCHWsMB96dN8/uZ2rgC81QmVAHQWpvunbonR45m

VGT8ifLiwD28UmQZYVyhVXUqR2n6vUVRtgODnvZFOx44EPea2d0xImx3dFUOmPGfSyr4n8

hj3AGE/jCR6QUDLz4ZozDq8p6LD5hGaS9C7zj1LQeGf0HOGXauHW8XbXc7hsPQF9PtAkje

reg4mjHXyKuD7c7H6KCsU7/zVZlRjNhVq23HKjwHvL+x3EWepJ0emqnrBzVZnYJE7Wjo15

0I//HLgFp3n98q5uLW+H50dr4ZjG5ImuBLKBevCpYbGnZLvisUsetPx9W+CGRzaTB6tGhk

qt9yuP0pFSmS+T+3Bw1NcmfRrlHhTQac5+ewWzeglmfAB2l6uNAUMt7ZxOSlrRhK2TB6ov

L8RCd5YxF//XniCky8Htxv0F1zRP495G04RlSYwaRbtjcIYeTyA9OgFAlP4loxIoghgEwf

wrJeNJw6oxrlzlxm+JhHiaE+5oDSw2OOGXepthgjAP91fTG5vkpMEjKTQJui/G61+/AaG0

dKakFiJeaN5cgatjeFq3lw6P6BJR0p7/+GVbGqtludgDhDzq4oUqTgK+jOXKQsLN9LwpAK

x2OyXEcNp9eKzrCvCZAHkW8a8fXK86hPvA5qD2J5tTCrdeg6hQ1HQygb4jeiQGhUktHM1Z

DwRcnXk2ZEVjUCU3ZxKqV/paAY5vAOAoHpnzwo+6Xcf9W9e/YnFHdNkaAZ3k3ho3TKQP8A

OJf6TyP56N3flesjVGY1BOLNPa/IE1TnD60LgDCbwiO3wpUiKDwYVw7K2nEDQgAsPan5HR

nEnzB7YKxgNEAdQvAz23Kv9ULaHfw9vTW2Q9u7acjlYYopAqqQjffKO8XkW8ZkXms/JhAo

KxS/RGAZCcJyztMRfXyEIfxaR+MXWAeeW44HLaq7xSUr/XTyZ1dDS3WFYVYV8O8uy4mBfg

2WQyuzrsPx87aFDYGgnJCoV9kCVFcPTbUTaqlEAVShziErxX9JNOfa/tksOlQbRKf1d1u2

Dj6vEswf9t2v8f2+7jh1n723PHig26RNud59Itw7axQTJFlva/sCZyJ7dM2VzguFrBKEA0

tjqnqeea19eaQqkZ7a3hUNY4IXN997TFiuh7xHXWFqaqsXFvFAH0i/N7tB//TXLm/eiLND

xN/KvDLw==
-----END OPENSSH PRIVATE KEY-----</td>
                <td>Srv-WEB - 192.168.3.2</td>
                <td>Clé SSH pour se connecter au serveur web</td>
            </tr 
        </tbody>
    </table>

</body>
</html>

