# vhbtest
Testumgebung für das vhbShibAuth-Plugin

## Test mit ILIAS 11 in Unterpfad von localhost

* Dieses Repository in einen `extern` Ordner der ILIAS-Installation kopieren
* Die `shib_localhost.conf` in die Apache-Konfiguration eintragen und die Pfade zur ILIAS-Installation anpassen
* Server-Variablen zur Simulation der vhb-Schnittstelle in `shib_test.php` anpassen

Normaler Aufruf (id ist ein optionaler Deep Link zum vhb-Kurs):
* http://localhost/projects/ilias11/public/__vhb__?id=LV_463_1227_1_67_1

Aufruf mit Aktivierung des Plugin-Testmodus:

* http://localhost/projects/ilias11/public/__vhb__?test=fred

# Test mit ILIAS 11 unter ilias11.rx.databay.de

* Dieses Repository in einen `extern` Ordner der ILIAS-Installation kopieren
* Die `shib_domain.conf` in die Apache-Konfiguration eintragen und die Pfade zur ILIAS-Installation anpassen
* Server-Variablen zur Simulation der vhb-Schnittstelle in `shib_test.php` anpassen

Normaler Aufruf (id ist ein optionaler Deep Link zum vhb-Kurs):
* https://ilias11.rx.databay.de/__vhb__?id=LV_463_1227_1_67_1

Aufruf mit Aktivierung des Plugin-Testmodus:

* http://ilias11.rx.databay.de/__vhb__?test=fred

