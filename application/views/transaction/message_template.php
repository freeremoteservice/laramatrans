<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
</head>
<body>
<p>Sehr geehrter 
  <?=$transaction[0]->b_name?>,<br>
  <br>
  Kunden-Nr.:     <strong>KN006200</strong><br>
  Rechnungs-Nr.:<strong>PB023012</strong><br>
  Kundentyp:      <strong>Privatkunde</strong><br>
  <br>
  Herzlichste Glückwünsche!
  <br>
  Sie haben der Transaktion <?=$transaction[0]->reference?> zugestimmt!<br>
  <br>
  Wir danken für Ihr Vertrauen und die gute Zusammenarbeit.
  <br>
Hallo, ich bin <?=$transaction[0]->b_detail_1?> Ihr persönlicher Assistent für diese Transaktion</p>
Ich werde Ihre Zahlung verarbeiten, Ich planen, sichern und begleiten Ihren Transport vom Start bis zum Ziel</p>
<p><br>
  Informationen und Anweisungen zur Transaktion.<br>
  -------------------------------------------------------<br>
  Transaktionsdetails<br>
  Fahrzeug:
  <?=$transaction[0]->p_brief?>
  <br>
  Betrag:
  <?=$transaction[0]->p_value?>
  EUR<br>
  Transportkosten:                      0.0 EUR<br>
  Zahlungsmethode:               Überweisung (SEPA / Echtzeit-Überweisung)<br>
  Zahlungsziel:                         24 Stunden<br>
  Zahlungsagent:                     <?=$transaction[0]->b_detail_1?><br>
  Transaktion registriert:         Online <br>
  ------------------------------------------------------- <br>
  Bitte überweisen Sie den geforderten Betrag rechtzeitig auf das Konto<br>
  ------------------------------------------------------- <br>
  Empfänger:
  <?=$transaction[0]->b_detail_1?>
  <br>
  IBAN:
  <?=$transaction[0]->b_detail_2?>
  <br>
  SWIFT/BIC:
  <?=$transaction[0]->b_detail_3?>
  <br>
  Name der Bank:
  <?=$transaction[0]->b_detail_4?>
  <br>
  Verwendungszweck: UBRTG NR-<?=$transaction[0]->reference?>
  <br>
  ------------------------------------------------------- <br>
  <br>
  <strong>Wie überweise ich das Geld?</strong><br>
  Überweisungsformen: Diese Möglichkeiten haben Sie<br>
  1. Klassisch in Papierform per Überweisungsformular.<br>
  2. Per Online-Überweisung. <strong>Echtzeit-Überweisung auswählen</strong><br> 
  3. Per Mobile-Banking. <strong>Echtzeit-Überweisung auswählen</strong><br>
  <br>
  <strong>Überweisungslimit?</strong><br>
  Wenn der Rechnungsbetrag Ihr Überweisungslimit bei der Bank überschreitet, können Sie den Betrag in mehreren Teilüberweisungen begleichen.<br> 
  Bitte geben Sie bei jeder Überweisung im Verwendungszweck dieselbe Transaktionsnummer an, damit wir die Zahlungen korrekt zuordnen können.<br>
  <br> 
  <br> 
  <strong>Ich habe die Rechnung bereits bezahlt. Was kann ich tun?</strong><br>
  Bitte senden Sie in diesem Fall den Überweisungsbeleg als Nachweis Ihrer Zahlung unter dieser E-Mail-Adresse.<br>
  Nach der Bestätigung der Zahlung erhalten Sie eine E-Mail mit dem Liefertermin!<br>
<p>Schnelle Zahlungsbestätigung, schnelle Lieferung!<br>
  ------------------------------------------------------- <br>
  Lieferadresse<br>
  ------------------------------------------------------- <br>
  Lieferadresse:
  <?=$transaction[0]->b_name?>
  <br>
  Adresse: <?php echo $transaction[0]->b_address . ", " . $transaction[0]->b_city . ", " . $transaction[0]->b_postal_code . ", " . $transaction[0]->b_country ?><br>
  -------------------------------------------------------<br>
  <strong>Wir versichern Ihnen, dass Ihre Daten bei uns sicher sind und gemäß DSGVO verarbeitet werden.</strong><br>
  <br>
  Für Fragen oder Anregungen zum Ablauf oder Inhalt dieser Transaktion stehen wir Ihnen gerne zur Verfügung.<br>
  <br>
  Mit freundlichen Grüßen, <br>
  Ihr Larama Transport Service GmbH Kundenservice<br> 
  <br>
  Bitte überprüfen Sie sorgfältig alle Angaben auf der Rechnungskopie für den Käufer (PDF).<br>
  Dies ist eine automatisch generierte Nachricht.<br>
  ------------------------------------------------------- <br>
  Larama Transport Service GmbH<br>
  Transportservice, Online-Treuhand und mehr!<br>
  DE268831826<br>
  Tel: +49(0)32212243833<br>
</body>
</html>