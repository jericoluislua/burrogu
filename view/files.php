<?php
/**
 * Created by PhpStorm.
 * User: laffan
 * Date: 8/27/2018
 * Time: 5:40 PM
 */

if(!isset($_SESSION['openfiles'])){

    ?>
    <p class="fileabt">Files that are secured by a password.</p>

    <form class="form-horizontal" action="/FILES/checkPassword" method="post">
        <div class="component" data-html="true">
            <div class="form-group">

                <div class="form-group">
                    <div class="col-md-1">
                        <label class="col-md-1 control-label" for="password" id="inputpass">Password</label>
                    </div>
                    <script>
                        $(document.getElementById("inputpass")).width() == 80%;
                    </script>
                    <div class="col-md-4">
                        <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md" required>
                        <input id="filebtn" name="send" type="submit" class="btn" value="Show secured files">
                    </div>
                </div>
            </div>
    </form>
    <?php
}
else if(isset($_SESSION['openfiles'])){
    ?>
    </div>
    <div class="row rfilegroup zeugnis">
        <h2 class="col groupname h hzeugnis">Zeugnisse</h2>

        <div class="row rcontent rbwd">
            <h4 class="filename col-md-6">BWD</h4>
            <div class="filedetails filedetails-sho col-md-6" align="right">
                <a href="/docs/zeugnisse/bwd/bwd_Zeugnis_Jerico_Lua.pdf" download>download</a>
            </div>
        </div>

        <div class="row rcontent rgibb">
            <h4 class="filename col-md-6">gibb</h4>
            <div class="filedetails filedetails-sho col-md-6" align="right">
                <a href="/docs/zeugnisse/gibb/gibb_Zeugnis_Jerico_Lua.pdf" download>download</a>
            </div>
        </div>
    </div>

    <div class="row rfilegroup rfilegroup-mid uek">
        <h2 class="col groupname h huek">ÜKs</h2>

        <div class="row rcontent ruek101">
            <h4 class="filename col-md-6">M101 - Webauftritt erstellen und veröffentlichen</h4>
            <div class="filedetails filedetails-lon" align="right">
                <a title="grade + teacher's feedback + daily journal" href="../public/images/test.JPG" download>download</a>
            </div>
            <div class="filedetails filedetails-lon" align="right">
                <a title="grade" href="../public/images/mepic.JPG" download>download</a>
            </div>
        </div>

        <div class="row rcontent ruek105">
            <h4 class="filename col-md-6">M105 - Datenbanken mit SQL bearbeiten</h4>
            <div class="filedetails filedetails-lon" align="right">
                <a title="grade + teacher's feedback + daily journal" href="../public/images/test.JPG" download>download</a>
            </div>
            <div class="filedetails filedetails-lon" align="right">
                <a title="grade" href="../public/images/mepic.JPG" download>download</a>
            </div>
        </div>

        <div class="row rcontent ruek302">
            <h4 class="filename col-md-10">M302 - Fortgeschrittene Funktionen von Office Werkzeuge nutzen</h4>
            <div class="filedetails filedetails-lon" align="right">
                <a title="grade + teacher's feedback + daily journal" href="../public/images/test.JPG" download>download</a>
            </div>
            <div class="filedetails filedetails-lon " align="right">
                <a title="grade" href="../public/images/mepic.JPG" download>download</a>
            </div>
        </div>

        <div class="row rcontent ruek304">
            <h4 class="filename col-md-8">M304 - Einzelplatz-Computer in Betrieb nehmen</h4>
            <div class="filedetails filedetails-lon" align="right">
                <a title="grade + teacher's feedback + daily journal" href="../public/images/test.JPG" download>download</a>
            </div>
            <div class="filedetails filedetails-lon" align="right">
                <a title="grade" href="../public/images/mepic.JPG" download>download</a>
            </div>
        </div>

        <div class="row rcontent ruek305">
            <h4 class="filename col-md-10">M305 - Betriebssysteme installieren, konfigurieren und installieren</h4>
            <div class="filedetails filedetails-lon" align="right">
                <a title="grade + teacher's feedback + daily journal" href="../public/images/test.JPG" download>download</a>
            </div>
            <div class="filedetails filedetails-lon " align="right">
                <a title="grade" href="../public/images/mepic.JPG" download>download</a>
            </div>
        </div>

        <div class="row rcontent ruek307">
            <h4 class="filename col-md-8">M307 - Interaktive Webseite mit Formular erstellen</h4>
            <div class="filedetails filedetails-lon" align="right">
                <a title="grade + teacher's feedback + daily journal" href="../public/images/test.JPG" download>download</a>
            </div>
            <div class="filedetails filedetails-lon" align="right">
                <a title="grade" href="../public/images/mepic.JPG" download>download</a>
            </div>
        </div>

        <div class="row rcontent ruek337">
            <h4 class="filename col-md-6">M337 - Mobile-Applikation realisieren</h4>
            <div class="filedetails filedetails-lon" align="right">
                <a title="grade + teacher's feedback + daily journal" href="../public/images/test.JPG" download>download</a>
            </div>
            <div class="filedetails filedetails-lon" align="right">
                <a title="grade" href="../public/images/mepic.JPG" download>download</a>
            </div>
        </div>
    </div>

    <div class="row rfilegroup rfilegroup-mid zertifikat">
        <h2 class="col groupname h hzertifikat">Zertifikate</h2>

        <div class="row rfileundergroup rzertinf">
            <h3 class="col undergroupname h hzertinf">Informatik</h3>

            <div class="row rcontent rsap">
                <h4 class="filename col-md-6">Business Process Integration with SAP</h4>

                <div class="filedetails filedetails-lon" align="right">
                    <a title="grade + teacher's feedback + daily journal" href="../public/images/test.JPG" download>download</a>
                </div>
            </div>

            <div class="row rcontent rsap-abap">
                <h4 class="filename col-md-6">SAP-Einführung in die ABAP Entwicklung</h4>

                <div class="filedetails filedetails-lon" align="right">
                    <a title="grade + teacher's feedback + daily journal" href="../public/images/test.JPG" download>download</a>
                </div>
            </div>
        </div>

        <div class="row rfileundergroup rzertson">
            <h3 class="col undergroupname h hzertson">Sonstige</h3>

            <div class="row rcontent rabacus">
                <h4 class="filename col-md-6">Abacus</h4>
                <div class="filedetails filedetails-sho">
                    <a title="grade + teacher's feedback + daily journal" href="../public/images/test.JPG" download>download</a>
                </div>
            </div>
        </div>
    </div>

    <?php
}
?>