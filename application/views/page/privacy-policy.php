<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>Datenschutzerklärung</h1>
        <p>Transparenz und Sicherheit beim Umgang mit Ihren Daten</p>
        <div class="hero-breadcrumb" style="margin-top: 2rem; color: var(--text-light);">
            <a href="<?= base_url() ?>" style="color: var(--accent-light); text-decoration: none;">Startseite</a>
            <span style="margin: 0 0.5rem;">/</span>
            <span>Datenschutz</span>
        </div>
    </div>
</section>

<!-- Privacy Content Section -->
<section class="business-highlights">
    <div class="container">
        <div class="highlight-grid">
            
            <!-- Section 1 -->
            <div class="highlight-card">
                <h3><i class="fas fa-shield-alt"></i> 1. Verantwortlicher</h3>
                <p>Verantwortlicher für die Datenverarbeitung auf dieser Website ist die Larama Transport Service GmbH & Co. KG.</p>
            </div>

            <!-- Section 2 -->
            <div class="highlight-card">
                <h3><i class="fas fa-database"></i> 2. Datenerhebung und -verwendung</h3>
                <p>Wir erheben und verarbeiten personenbezogene Daten nur im Rahmen der gesetzlichen Bestimmungen und ausschließlich zur Erbringung unserer Treuhandservices für Fahrzeugtransporte.</p>
                <p><strong>Wir speichern folgende Daten:</strong></p>
                <ul style="margin: 1rem 0; padding-left: 1.5rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-user" style="color: var(--accent); margin-right: 0.5rem;"></i> Name, Anschrift, E-Mail-Adresse</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-phone" style="color: var(--accent); margin-right: 0.5rem;"></i> Telefonnummer und Kontaktdaten</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-car" style="color: var(--accent); margin-right: 0.5rem;"></i> Fahrzeugdaten und Dokumente</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-file-contract" style="color: var(--accent); margin-right: 0.5rem;"></i> Vertrags- und Transaktionsdaten</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-credit-card" style="color: var(--accent); margin-right: 0.5rem;"></i> Zahlungsinformationen (verschlüsselt)</li>
                </ul>
            </div>

            <!-- Section 3 -->
            <div class="highlight-card">
                <h3><i class="fas fa-share-alt"></i> 3. Datenweitergabe an Dritte</h3>
                <p>Eine Weitergabe Ihrer personenbezogenen Daten an Dritte erfolgt nur in folgenden Fällen:</p>
                <ul style="margin: 1rem 0; padding-left: 1.5rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-handshake" style="color: var(--accent); margin-right: 0.5rem;"></i> Zur Vertragserfüllung (Verkäufer/Käufer)</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-gavel" style="color: var(--accent); margin-right: 0.5rem;"></i> Bei rechtlichen Verpflichtungen</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-shield-alt" style="color: var(--accent); margin-right: 0.5rem;"></i> Zum Schutz unserer berechtigten Interessen</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--accent); margin-right: 0.5rem;"></i> Mit Ihrer ausdrücklichen Einwilligung</li>
                </ul>
            </div>

            <!-- Section 4 -->
            <div class="highlight-card">
                <h3><i class="fas fa-lock"></i> 4. Datensicherheit</h3>
                <p>Wir verwenden modernste Sicherheitsmaßnahmen zum Schutz Ihrer Daten:</p>
                <ul style="margin: 1rem 0; padding-left: 1.5rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-shield-alt" style="color: var(--accent); margin-right: 0.5rem;"></i> SSL-Verschlüsselung für sichere Datenübertragung</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-user-shield" style="color: var(--accent); margin-right: 0.5rem;"></i> Nur autorisierte Mitarbeiter haben Zugriff</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-server" style="color: var(--accent); margin-right: 0.5rem;"></i> Regelmäßige Sicherheitsupdates</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-key" style="color: var(--accent); margin-right: 0.5rem;"></i> Starke Passwortrichtlinien</li>
                </ul>
            </div>

            <!-- Section 5 -->
            <div class="highlight-card">
                <h3><i class="fas fa-clock"></i> 5. Speicherdauer</h3>
                <p><strong>Vertragsrelevante Daten:</strong> Mindestens 10 Jahre nach Vertragsende (Handelsrechtliche Aufbewahrungsfrist)</p>
                <p><strong>IP-Adressen:</strong> Automatische Löschung nach 7 Tagen (außer bei Sicherheitsvorfällen)</p>
                <p><strong>Marketing-Daten:</strong> Bis zum Widerruf der Einwilligung</p>
                <p><strong>Kundenservice-Daten:</strong> 3 Jahre nach letztem Kontakt</p>
            </div>

            <!-- Section 6 -->
            <div class="highlight-card">
                <h3><i class="fas fa-user-check"></i> 6. Ihre Rechte</h3>
                <p>Sie haben folgende Rechte bezüglich Ihrer personenbezogenen Daten:</p>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem; margin-top: 1.5rem;">
                    <div style="background: var(--secondary); padding: 1rem; border-radius: 8px; text-align: center;">
                        <i class="fas fa-info-circle" style="color: var(--accent); font-size: 1.5rem; margin-bottom: 0.5rem;"></i>
                        <h4 style="margin: 0.5rem 0; color: var(--text);">Recht auf Auskunft</h4>
                        <p style="margin: 0; font-size: 0.9rem; color: var(--text-light);">Über gespeicherte Daten</p>
                    </div>
                    <div style="background: var(--secondary); padding: 1rem; border-radius: 8px; text-align: center;">
                        <i class="fas fa-edit" style="color: var(--accent); font-size: 1.5rem; margin-bottom: 0.5rem;"></i>
                        <h4 style="margin: 0.5rem 0; color: var(--text);">Recht auf Berichtigung</h4>
                        <p style="margin: 0; font-size: 0.9rem; color: var(--text-light);">Korrektur falscher Daten</p>
                    </div>
                    <div style="background: var(--secondary); padding: 1rem; border-radius: 8px; text-align: center;">
                        <i class="fas fa-trash-alt" style="color: var(--accent); font-size: 1.5rem; margin-bottom: 0.5rem;"></i>
                        <h4 style="margin: 0.5rem 0; color: var(--text);">Recht auf Löschung</h4>
                        <p style="margin: 0; font-size: 0.9rem; color: var(--text-light);">"Recht auf Vergessenwerden"</p>
                    </div>
                    <div style="background: var(--secondary); padding: 1rem; border-radius: 8px; text-align: center;">
                        <i class="fas fa-ban" style="color: var(--accent); font-size: 1.5rem; margin-bottom: 0.5rem;"></i>
                        <h4 style="margin: 0.5rem 0; color: var(--text);">Recht auf Widerspruch</h4>
                        <p style="margin: 0; font-size: 0.9rem; color: var(--text-light);">Gegen die Verarbeitung</p>
                    </div>
                </div>
                <p style="margin-top: 1.5rem;">Zur Ausübung Ihrer Rechte können Sie uns über die Kontaktinformationen auf unserer Website erreichen.</p>
            </div>

            <!-- Section 7 -->
            <div class="highlight-card">
                <h3><i class="fas fa-cookie-bite"></i> 7. Cookies und Tracking</h3>
                <p>Unsere Website verwendet Cookies zur Verbesserung der Benutzererfahrung und für technische Funktionen.</p>
                <p>Wir verwenden keine Tracking-Cookies oder Analyse-Tools, die Ihre Privatsphäre beeinträchtigen.</p>
                <p>Sie können Cookies in Ihren Browser-Einstellungen deaktivieren, dies kann jedoch die Funktionalität der Website beeinträchtigen.</p>
            </div>

            <!-- Section 8 -->
            <div class="highlight-card">
                <h3><i class="fas fa-exclamation-triangle"></i> 8. Beschwerderecht</h3>
                <p>Sie haben das Recht, sich bei einer Datenschutz-Aufsichtsbehörde über die Verarbeitung Ihrer personenbezogenen Daten zu beschweren.</p>
                <p>Die zuständige Aufsichtsbehörde ist die Datenschutzbehörde des Bundeslandes, in dem Sie wohnen oder arbeiten.</p>
            </div>

            <!-- Section 9 -->
            <div class="highlight-card">
                <h3><i class="fas fa-envelope"></i> 9. Kontakt</h3>
                <p>Bei Fragen zum Datenschutz oder zur Ausübung Ihrer Rechte können Sie uns über die Kontaktinformationen auf unserer Website erreichen.</p>
                <p style="margin-top: 1rem; font-size: 0.9rem; color: var(--text-light);">Stand dieser Datenschutzerklärung: Januar 2025</p>
            </div>

        </div>
    </div>
</section>
