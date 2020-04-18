<html>
<head>
</head>

<body>

<form action="init_rrn.php" method="POST">
    BONUS
    <input type="radio" id="sibonus" name="bonus" value="S">
    <label for="sibonus">Sì</label>
    <input type="radio" id="nobonus" name="bonus" value="N">
    <label for="nobonus">No</label><br>
    MODALITÀ<br>
    <input type="radio" id="juniorrc" name="modalita" value="JRC">
    <label for="juniorrc">Junior RC</label><br>
    <input type="radio" id="console" name="modalita" value="C">
    <label for="console">Console</label><br>
    <input type="radio" id="arcade" name="modalita" value="A">
    <label for="arcade">Arcade</label><br>
    <input type="radio" id="simulazione" name="modalita" value="S">
    <label for="simulazione">Simulaziome</label><br>
    AUTO<br>
    <input type="radio" id="fissa" name="bonus" value="S">
    <label for="fissa">fissa</label><br>
    <input type="radio" id="random" name="bonus" value="N">
    <label for="random">random</label><br>
    <input type="radio" id="scelta" name="bonus" value="N">
    <label for="scelta">scelta</label><br>
    <input type="radio" id="altro" name="bonus" value="N">
    <label for="altro">altro</label><br>
    <select name="auto" id="auto" >
    <option value="JG-7">JG-7 </option>
    <option value="VOLKEN TURBO">Volken Turbo </option>
    <option value="ADEON">Adeon </option>
    <option value="TOYECA">Toyeca</option>
    <option value="PANDARMINO">Pandarmino </option>
    </select><br>
    PUNTEGGIO<br>
    <select name="punteggio" id="punteggio" >
    <option value="10-8">10-8-6-5-4-3-2-1</option>
    <option value="10-6">10-6-4-3-2-1</option>
    <option value="SCALARE">scalare</option>
    <option value="F1">(F1) 25-18-15-12-10-8-6-4-2-1</option>
    <option value="MOTOGP">(motoGP) 25-20-16-13-11-10-9-8-7-6-5-4-3-2-1 </option>
    <option value="MOTOGPV">(motoGP vecchio) 15-12-10-8-6-5-4-3-2-1 </option>
    </select><br>
    <label for="note">NOTE:</label><br>
    <textarea name="Text1" cols="40" rows="5">Tipo piste (I/S), Verso, Squadre, GIRI, giro veloce,data?</textarea> <br>

</form>

</body>

</html>