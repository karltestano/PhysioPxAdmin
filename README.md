# PhysioPxAdmin
Administer your physiotherapy practice, especially in Germany

This program is only useful, if you are a physiotherapist in germany. Therefore the whole descript will be in german, please excuse. If you have similar monsters in your public administration like we in germany (Spitzenverband der gesetzlichen Krankenkassen, Gemeinsamer Bundesausschuss etc.), please leave a note an i will translate all description into english. But i am afraid, that in know anything over the administrations in other european countrys nor in the rest of the world, except of that they are sometimes disturbing ...
# PhysioPxadmin, Praxisverwaltung für Physiotherapiepraxen (Einleitung)
In Deutschland hat alles seine Ordnung, egal, worum es sich handelt. So unterliegt auch die selbstständige Tätigleit von Physiotherapeuten (im Folgenden mit "Physios" abgekürzt) den strengen Regeln der BRanche der Heil-/Hilfsmittelerbringer. Wenn man hier die Arbeit durch den Einsatz von IT vereinfachen möchte, müssen alle diese Vorschriften eingehalten werden. Alleine die Prüfung von Kassenrezepten, die den Physios per Gerichtsurteil aufgebürdet wurde und noch immer nicht angemessen vergütet wird, dauert ca. 10 bis 15. Minuten und muss streng nach den Regelungen des Heilmittekataloges des "Gemeinsamen Bundesausschusses" vorgenommen werden. Dies alles und noch viel mehr sind die Rahmenbedingungen, unter denen dieses Programmsystem entstand. Es wäre im Übrigen ohne die viele Arbeit der "wahren Helden der Programmierung", die für dieses System die ganzen Bausteine geliefert haben, nicht möglich gewesen.
# Was kann das Programmsystem immer noch nicht?
- Zur hohen Schule im Gesundheitswesen gehört in Deutschland die elektronische Gesundheitskarte (eGK). Leider ist es mir bis heute nicht gelungen, die Karten der AOK zu lesen.
- Wegen Mangel an Zeitüberfluss habe ich es bis jetzt noch nicht geschafft, das System von "Frames" auf "Resonsive" umzustellen. Als ich mit der Arbeit anfing, gab es gerade ein Jahr das IPhone und das war mir zu teuer ...
- Es gibt keine kalendergestützte Terminverwaltung! Dazu gibt es heute gute web-basierte Lösungen (Doctolib usw.)
- Viele Zeilen sind uralt und entsprechen nicht den heutigen Programmierstil. Pardon, bitte verbessert es :-)
- Bei der Nutzung fällt sicher noch viel auf ...
# Was kann es denn nun?
Das Programmsystem entstand mit Hilfe einer laufenden Praxis für Physiotherapie und hat sich natürlich an deren Bedürfnissen orientiert, es ist also "Nutzergetrieben" entwickelt worden. Folgende Aufgaben werden unterstützt:
- Allgemein
  - Verwaltung von Patientendaten (Einlesen der eGK bei gesetzlich Versicherten. E-Mail an den Patienten)
  - Verwalten der Rezeptdaten 
  - Verwalten von Daten der Krankenkassen auf der Basis der Kostenträgerdateien des GKV-Spitzenverbandes (siehe https://www.gkv-datenaustausch.de)
  - Verwaltung der bundeseinheitlichen (Behandlungs-) Positionen nach Maßgabe des GKV-Spitzenverbandes
  - Personalverwaltung (Mitarbeiter)
   - Abrechnung auf Provisionsbasis
   - Umsatzergebnisse pro Mitarbeiter/für die gesamte Praxis
  - Ärzteveraltung
  - Buchhaltung mit Kontenplan
- Philosopie: "Der Browser ist die Schnittstelle", alle Funktionen über Browser gesteuert (winzige Ausnahme: eGK lesen, aber die gelesenen Daten sind sofort im Browser abrufbar)
- Besonderheiten
  - Elektronische Patientenakte, Ausgabe der Daten auf einem Tablet direkt beim Behandler
    - Erstellung von Behandlungsverträgen, Einscannen und Ablage der vom Patientenunterschriebenen Fassung
    - Einscannen des Rezeptes 
  - Rechnung kann auch per Mail gesendet werden (bei nicht gesetzlich Versicherten)
  - Behandlungsverträge per E-Mail zustellbar
  - Alle relvanten Patientenunterlagen (Behandlungsvertrag, Rechnung, Zuzahlungsquittung usw.) werden über Browser erstellt.

  
