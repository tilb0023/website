@extends('layout')
@section('content')
    <title>Marlena van Tilburg | Tabel</title>

@section('dropdown')
    <li class="dropdown2">
        @endsection

    <div class="box">

        <h4>Jaar 1</h4>

    </div>

@section('dropdown')
    <li class="dropdown">
        <a class="active" href="javascript:void(0)" class="dropbtn">Dashboard ⮟</a>
        <div class="dropdown-content">
            <a href="tabel">Tabel</a>
            <a href="link">Relevante Links</a>
@endsection

<div class="container15">
    <div class="table">

        <table>
            <tr style="background-color: black; color: white">
                <th>Cursus</th>
                <th>Toets</th>
                <th>Weging</th>
                <th>EC</th>
                <th>Cijfer</th>
            </tr>
            <tr>
                <th colspan="8" style="background-color: #fff383; color: black">Blok 1</th>
            </tr>
            <tr>
                <td>Opleidings- en beroepsoriëntatie</td>
                <td>Eindgesprek</td>
                <td>100%</td>
                <td>2.5</td>
                <td class=""></td>
            </tr>
            <tr>
                <td>Computer science basics</td>
                <td>Theorietentamen</td>
                <td>100%</td>
                <td>7.5</td>
                <td class= ""></td>
            </tr>
            <tr>
                <td>Programming basics</td>
                <td>Casustoets</td>
                <td>100%</td>
                <td>5</td>
                <td class=""></td>
            </tr>
            <tr>
                <th colspan="8" style="background-color: #fff383; color: black">Blok 2</th>
            </tr>
            <tr>
                <td>Professional skills 1</td>
                <td>Tentamen</td>
                <td>33%</td>
                <td>2.5</td>
                <td class=""></td>
            </tr>
            <tr>
                <td></td>
                <td>Verslag</td>
                <td>33%</td>
                <td></td>
                <td class=""></td>
            </tr>
            <tr>
                <td>HZ Personality</td>
                <td>Portfolio</td>
                <td>100%</td>
                <td>2.5</td>
                <td class=""></td>
            </tr>
            <tr>
                <td>Object-oriented programming</td>
                <td>Casustoets</td>
                <td>50%</td>
                <td>5</td>
                <td class=""></td>
            </tr>
            <tr>
                <td></td>
                <td>Groepsproject</td>
                <td>50%</td>
                <td>5</td>
                <td class=""></td>
            </tr>
            <tr>
                <th colspan="8" style="background-color: #fff383; color: black">Blok 3</th>
            </tr>
            <tr>
                <td>Professional skills 2</td>
                <td>Agile functioneren</td>
                <td>50%</td>
                <td>2.5</td>
                <td class=""></td>
            </tr>
            <tr>
                <td></td>
                <td>Engels opdrachten</td>
                <td>25%</td>
                <td></td>
                <td class=""></td>
            </tr>
            <tr>
                <td></td>
                <td>Engels werkstuk</td>
                <td>25%</td>
                <td></td>
                <td class=""></td>
            </tr>
            <tr>
                <td>Professionele werkplek</td>
                <td>Eindgesprek</td>
                <td>100%</td>
                <td>2.5</td>
                <td class=""></td>
            </tr>
            <tr>
                <td>Framework development 1</td>
                <td>Casustoets</td>
                <td>100%</td>
                <td>5</td>
                <td class=""></td>
            </tr>
            <tr>
                <td>Framework project 1</td>
                <td>Requirementsverslag</td>
                <td>50%</td>
                <td>5</td>
                <td class=""></td>
            </tr>
            <tr>
                <td></td>
                <td>Projectresultaat</td>
                <td>50%</td>
                <td></td>
                <td class=""></td>
            </tr>
            <tr>
                <th colspan="8" style="background-color: #fff383; color: black">Blok 4</th>
            </tr>
            <tr>
                <td>Professional skills 3</td>
                <td>Agile functioneren</td>
                <td>50%</td>
                <td>2.5</td>
                <td class=""></td>
            </tr>
            <tr>
                <td></td>
                <td>Engels opdrachten</td>
                <td>25%</td>
                <td></td>
                <td class=""></td>
            </tr>
            <tr>
                <td></td>
                <td>Engels werkstuk</td>
                <td>25%</td>
                <td></td>
                <td class=""></td>
            </tr>
            <tr>
                <td>IT Personality 1</td>
                <td>Portfolio</td>
                <td>100%</td>
                <td>2.5</td>
                <td class=""></td>
            </tr>
            <tr>
                <td>Framework development 2</td>
                <td>Opdrachten</td>
                <td>100%</td>
                <td>5</td>
                <td class=""></td>
            </tr>
            <tr>
                <td>Framework project 2</td>
                <td>Code reviews</td>
                <td>50%</td>
                <td>5</td>
                <td class=""></td>
            </tr>
            <tr>
                <td></td>
                <td>Projectresultaat</td>
                <td>50%</td>
                <td></td>
                <td class=""></td>
            </tr>
        </table>
        <p3>NBSA: 45 EC!</p3>
    </div>
</div>

<br>
<br>
<br>

@endsection

@section('plaatje')
    <img class="logo" src="images/logo/tableIcon.jpg" alt="home">
    <h2>Tabel</h2>
    @endsection



</body>
</html>
