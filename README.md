# vhbtest
Testumgebung für das vhbShibAuth-Plugin

* Dieses Repository in einen `.env` Ordner der ILIAS-Installation kopieren
* Die `shib_test.conf` in die Apache-Konfiguration eintragen und die Pfade zur ILIAS-Installation anpassen
* Server-Variablen zur Simulation der vhb-Schnittstelle in `shib_test.php` anpassen

Normaler Aufruf (id ist ein optionaler Deep Link zum vhb-Kurs:
* http://localhost/projects/ilias9/__vhb__?id=LV_463_1227_1_67_1

Aufruf mit Aktivierung des Plugin-Testmodus:

* http://localhost/projects/ilias9/__vhb__?test=fred
