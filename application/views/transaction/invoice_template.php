<style>
	@page {
		sheet-size: A3;
	}
	.core_information {
		margin-top: -50px;
	}
	.core_information p,
	.buyer_details p,
	.bank_details p {
		margin: 5px 0;
		font-size: 14px;
	}

	.buyer_details {
		margin-top: 20px;
	}
	.buyer_details p {
		margin: 5px 0;
	}

	.table {
		margin: 20px 0 10px 0;
	}

	.description_1 {
		font-size: 12px;
	}

	.bank_details {
		margin: 50px 0 10px 0;
	}

	.description_2 {
		font-size: 10px;
	}

	.description_3 {
		font-size: 14px;
	}

	.page_footer {
		position: absolute;
		bottom: -50px;
		width: 100%;
		height: 100px;
		margin: 0 -50px;
		padding: 20px;
		font-size: 11px;
		background-color: #d8d7dc;
	}
	.page_footer p {
		margin: 0;
		font-weight: bold;
	}
	.page_footer .left_info,
	.page_footer .right_info {
		width: 50%;
		float: left;
	}
	.page_footer .right_info {
		text-align: right;
		margin-top: 30px;
	}

	#page_2 .header {
		font-size: 15px;
	}
	#page_2 .content {
		font-size: 12px;
	}
	.information_box {
		float: left;
		width: 33%;
		padding-right: 10px;
	}
	.information_box p {
		margin: 0;
	}
	.description_box {
		padding-top: 10px;
	}
	.description_box .title {
		margin: 0;
		font-weight: bold;
	}
	.description_box .box_content {
		padding-left: 50px;
	}
	.description_box .box_content p {
		margin: 0 0 5px 0;
	}
</style>

<!-- page 1 -->
<div id="page_1">
	<div class="header">
		<div style="text-align: right">
			<img src="<?= base_url('public/img/logo-invoice.png'); ?>" />
		</div>
		<div>
			<img src="<?= base_url('public/img/invoice-header.png'); ?>" style="width: 100%;" />
		</div>
	</div>

	<div class="content">
		<!-- core information -->
		<div class="core_information">
			<p><strong>Rechnung Nr: </strong><span>PB023012</span></p>
			<p><strong>Rechnungsdatum: </strong><span><?= $current_date ?></span></p>
			<p><strong>Kundennummer: </strong><span>KN006200</span></p>
			<p><strong>Falligkeitsdatum: </strong><span><?= $final_date ?></span></p>
			<p><strong>Transaktions-ID: </strong><span><?= $transaction[0]->reference ?></span></p>
		</div>

		<!-- buyer details -->
		<div class="buyer_details">
			<p><strong>Rechnung an</strong></p>
			<p><?= $transaction[0]->b_name ?></p>
			<p><?= $transaction[0]->b_address ?></p>
			<p><?= $transaction[0]->b_city ?></p>
			<p><?= $transaction[0]->b_postal_code ?></p>
			<p><?= $transaction[0]->b_country ?></p>
		</div>

		<div class="table">
			<table style="width: 100%; border-collapse: collapse;">
				<thead style="border-top: 1px solid black; border-bottom: 1px solid black;">
					<tr>
						<td style="width: 15%; text-align: center;">Lfd.Nr.</td>
						<td style="width: 50%;">Bezeichnung</td>
						<td style="width: 25%; text-align: center;">Anzahl</td>
						<td style="width: 25%; text-align: center;">Preis</td>
					</tr>
				</thead>
				<tbody>
					<tr style="background-color: #c0c0c0;">
						<td style="text-align: center;">1</td>
						<td><?= $transaction[0]->p_description ?></td>
						<td style="text-align: center;">1</td>
						<td style="text-align: center;"><?= $transaction[0]->p_value ?></td>
					</tr>
					<tr>
						<td style="text-align: center;">2</td>
						<td>PREMIUM SERVICES</td>
						<td style="text-align: center;">1</td>
						<td style="text-align: center;">0</td>
					</tr>
					<tr style="background-color: #c0c0c0;">
						<td style="background-color: white;"></td>
						<td><strong>PKW-Transport: Individualtransport</strong></td>
						<td></td>
						<td style="text-align: center;">0</td>
					</tr>
					<tr>
						<td></td>
						<td><strong>+ Versicherung</strong></td>
						<td></td>
						<td style="text-align: center;">0</td>
					</tr>
					<tr style="position: relative; background-color: #c0c0c0; border-bottom: 1px solid black;">
						<td style="background-color: white; border-bottom: none; border-bottom: 1px solid white;"></td>
						<td style="font-size: 16px;"><strong>Zu zahlender Betrag</strong></td>
						<td></td>
						<td style="position: absolute; right: 60px; font-size: 16px;"><strong><?= $transaction[0]->p_value ?> EUR</strong></td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="description_1">
			<p>
				Bitte überweisen Sie den offenen Forderungsbetrag zeitnah auf das unten aufgeführte Konto.
				Für eine reibungslose Zuordnung Ihrer Zahlung verwenden Sie bitte ausschließlich die angegebenen Überweisungsdetails.
				Falls möglich, nutzen Sie gerne eine Echtzeitüberweisung.
			</p>
		</div>

		<!-- bank details -->
		<div class="bank_details">
			<p><strong>Kontoinhaber: </strong><span><?= $transaction[0]->b_detail_1 ?></span></p>
			<p><strong>IBAN: </strong><span><?= $transaction[0]->b_detail_2 ?></span></p>
			<p><strong>BIC/SWIFT: </strong><span><?= $transaction[0]->b_detail_3 ?></span></p>
			<p><strong>Verwendungszweck: </strong><span><?= $transaction[0]->reference ?></span></p>
		</div>

		<div class="description_2">
			<p>*Bitte geben Sie nur diese Nummernfolge als Verwendungszweck an, sonst können wir Ihre Zahlung nicht zuordnen.</p>
		</div>

		<div class="description_3">
			<p>
				Sobald wir Ihre Zahlung erfolgreich verbucht haben, erhalten Sie per E-Mail eine Bestätigung.<br />
				Schnellere Zahlungsbestätigung. Schnellere Lieferung!<br />
				<br />
				Mit freundlichen Grüßen,<br />
				<?= $transaction[0]->b_detail_1 ?>
			</p>
		</div>
  	</div>

	<div class="page_footer">
		<div class="left_info">
			<p><?= WEBSITE_NAME ?></p>
			<p><?= WEBSITE_ADDRESS_1 ?></p>
			<p><?= WEBSITE_ADDRESS_2 ?></p>
			<p><?= WEBSITE_ADDRESS_3 ?></p>
			<p>UST-IdNr. <?= COMPANY_VAT_NUMBER ?></p>
			<p>www.<?= SITE_URL_ALIAS ?></p>
			<p><?= WEBSITE_EMAIL ?></p>
		</div>
		<div class="right_info">
			<p>IBAN: <?= $transaction[0]->b_detail_2 ?></p>
			<p>SWIFT/BIC: <?= $transaction[0]->b_detail_3 ?></p>
			<p><?=$transaction[0]->b_detail_4?></p>
		</div>
	</div>
</div>

<!-- page 2 -->
<div id="page_2">
	<div class="header">
		<strong>Allgemeine Geschäftsbedingungen für</strong><br>
		<strong>die Nutzung des Transports inklusive Treuhandservice</strong>
	</div>

	<div class="content">
		<div class="detail-2-1" style="padding-top: 20px;">
			<div class="information_box">
				<p><strong>Vermittler: </strong><?= WEBSITE_NAME ?></p>
				<p><strong>Zahlungsagent: </strong><?= $transaction[0]->b_detail_1 ?></p>
		  	</div>
			<div class="information_box">
				<p><strong>Käufer: </strong><?= $transaction[0]->b_name ?></p>
				<p><?= $transaction[0]->b_address ?></p>
				<p><?= $transaction[0]->b_city ?></p>
				<p><?= $transaction[0]->b_postal_code ?></p>
				<p><?= $transaction[0]->b_country ?></p>
			</div>
			<div class="information_box">
				<p><strong>Verkäufer: </strong><?= $transaction[0]->s_name ?></p>
				<p>Adresse: <span><?= !empty($s_address[0]) ? $s_address[0] : "" ?></span></p>
				<p>Stadt: <span><?= !empty($s_address[2]) ? $s_address[2] : "" ?></span></p>
				<p>Postleitzahl: <span><?= !empty($s_address[1]) ? $s_address[1] : "" ?></span></p>
				<p><?= !empty($s_address[3]) ? $s_address[3] : "" ?></p>
			</div>
		</div>

		<div class="detail-2-2" style="clear: both; padding-top: 10px;">
			<div class="information_box">
				<p><strong>Transaktion einzelheiten</strong></p>
				<p>Transaktions-ID: <span><?= $transaction[0]->reference ?></span></p>
				<p>Fahrzeug: <span><?= $transaction[0]->p_description ?></span></p>
				<p>Fahrzeugpreis: <span><?= $transaction[0]->p_value ?> €</span></p>
			</div>

			<div class="description_box" style="clear: both;">
				<div class="box_title">
					1. Geltungsbereich
				</div>
				<div class="box_content">
					<p>
						a) Diese Allgemeinen Geschäftsbedingungen (AGB) gelten für alle Transaktionen und Dienstleistungen im Rahmen des Treuhand-Transportservices.
					</p>
					<p>
						b) Durch die Inanspruchnahme unserer Dienstleistungen erklärt sich der Kunde mit diesen Bedingungen einverstanden.
					</p>
				</div>
			</div>
  			<div class="description_box">
				<div class="box_title">
					2. Leistungsumfang
				</div>
				<div class="box_content">
					<p>
						a) Unser Unternehmen bietet einen sicheren Transport- und Treuhandservice für Fahrzeuge an.
					</p>
					<p>
						b) Die wichtigsten Vorteile für den Käufer umfassen:<br />
						- 21-Tage-Geld-zurück-Garantie: Der Käufer kann innerhalb von 21 Tagen nach Lieferung eine Rückerstattung beantragen.<br />
						- Sofortige Rückerstattung: Falls der Käufer mit dem Fahrzeug nicht zufrieden ist, erfolgt die Erstattung des gezahlten Betrags noch am selben Tag.<br />
						- Versicherter Transport: Das Fahrzeug ist während des gesamten Transports umfassend versichert.<br />
						- Maximale Sicherheit: Die Zahlung wird erst an den Verkäufer freigegeben, wenn der Käufer das Fahrzeug akzeptiert.<br />
						- Professioneller Kundenservice: Ein persönlicher Berater begleitet den Kunden während des gesamten Prozesses
					</p>
				</div>
			</div>
			<div class="description_box">
				<div class="box_title">
					3. Zahlungsbedingungen
				</div>
				<div class="box_content">
					<p>
						a) Die Zahlung der Rechnung muss innerhalb der auf der Rechnung angegebenen Frist erfolgen.
					</p>
					<p>
						b) Die Zahlung erfolgt ausschließlich über die von uns vorgegebenen sicheren Zahlungsmethoden.
					</p>
					<p>
						c) Bei nicht fristgerechter Zahlung behalten wir uns das Recht vor, Mahngebühren zu erheben.
					</p>
				</div>
			</div>
			<div class="description_box">
				<div class="box_title">
					4. Liefer- und Rückabwicklungsbedingungen
				</div>
				<div class="box_content">
					<p>
						a) Die Lieferung erfolgt an die vom Käufer angegebene Adresse.
					</p>
					<p>
						b) Sollte das Fahrzeug nicht den Erwartungen des Käufers entsprechen, kann innerhalb von 21 Tagen nach Erhalt eine Rückgabe beantragt werden.
					</p>
					<p>
						c) Die Rückerstattung erfolgt am selben Tag, sobald das Fahrzeug wieder in unseren Besitz übergegangen ist.
					</p>
				</div>
			</div>
			<div class="description_box">
				<div class="box_title">
					5. Haftung und Versicherung
				</div>
				<div class="box_content">
					<p>
						a) Der Transport des Fahrzeugs ist vollständig versichert.
					</p>
					<p>
						b) Unser Unternehmen haftet nicht für Schäden, die nach der Übergabe des Fahrzeugs an den Käufer entstehen.
					</p>
				</div>
			</div>
			<div class="description_box">
				<div class="box_title">
					6. Folgen einer Nichtzahlung
				</div>
				<div class="box_content">
					<p>
						a) Sollte die Rechnung nicht innerhalb der vereinbarten Frist beglichen werden, behalten wir uns das Recht vor, die Forderung an eine Auskunftei (z. B. SCHUFA) weiterzuleiten.
					</p>
					<p>
						b) Dies kann negative Auswirkungen auf die Bonität des Schuldners haben.
					</p>
				</div>
			</div>
			<div class="description_box">
				<div class="box_title">
					7. Datenschutz
				</div>
				<div class="box_content">
					<p>
						a) Wir speichern und verarbeiten personenbezogene Daten ausschließlich im Rahmen der gesetzlichen Vorschriften.
					</p>
					<p>
						b) Zum Schutz vor Missbrauch unserer Dienstleistungen speichern wir die IP-Adresse des Kunden.
					</p>
				</div>
			</div>
			<div class="description_box">
				<div class="box_title">
					8. Schlussbestimmungen
				</div>
				<div class="box_content">
					<p>
						a) Sollte eine Bestimmung dieser AGB unwirksam sein oder werden, bleibt die Gültigkeit der übrigen Bestimmungen unberührt.
					</p>
					<p>
						b) Es gilt das Recht der Bundesrepublik Deutschland.
					</p>
				</div>
			</div>
		</div>

		<!-- Signature Section -->
		<div style="width: 100%; margin-top: 40px;">
			<!-- Company Stamp and Signature -->
			<div style="width: 33.333%; height: 120px; float: left; position: relative;">
				<label for="" style="position: absolute; top: 0; left: 0; font-weight: bold; width: 100%; text-align: center;">Unterschrift des Unternehmens</label>
				<img src="<?= base_url('public/img/stamp.png'); ?>" style="width: 80px; height: auto; position: absolute; top: 30px; left: 80px;" />
				<img src="<?= base_url('public/img/signature_company.png'); ?>" style="height: 150px; position: absolute; bottom: -20px;" />
				<div style="border-bottom: 1px solid black; width: 180px; position: absolute; left: 30px; bottom: 0;"></div>
			</div>
			
			<!-- Seller Signature -->
			<div style="width: 33.333%; height: 120px; float: left; position: relative;">
				<label for="" style="position: absolute; top: 0; left: 0; font-weight: bold; width: 100%; text-align: center;">Unterschrift des Verkäufers</label>
				<img src="<?= base_url('public/img/signature-seller.png'); ?>" style="height: 70px; position: absolute; left: 50px; bottom: -20px;" />
				<div style="border-bottom: 1px solid black; width: 180px; position: absolute; left: 30px; bottom: 0;"></div>
			</div>
			
			<!-- Buyer Signature -->
			<div style="width: 33.333%; height: 120px; float: left; position: relative;">
				<label for="" style="position: absolute; top: 0; left: 0; font-weight: bold; width: 100%; text-align: center;">Unterschrift des Käufers</label>
				<img src="<?= $transaction[0]->b_signature ?>" style="height: 70px; position: absolute; left: 50px; bottom: -20px;" />
				<div style="border-bottom: 1px solid black; width: 180px; position: absolute; left: 30px; bottom: 0;"></div>
			</div>
		</div>
	</div>
</div>