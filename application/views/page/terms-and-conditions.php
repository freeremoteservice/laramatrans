<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>Allgemeine Geschäftsbedingungen</h1>
        <p>Sichere und transparente Bedingungen für Ihren Fahrzeugkauf</p>
        <div class="hero-breadcrumb" style="margin-top: 2rem; color: var(--text-light);">
            <a href="<?= base_url() ?>" style="color: var(--accent-light); text-decoration: none;">Startseite</a>
            <span style="margin: 0 0.5rem;">/</span>
            <span>AGB</span>
        </div>
    </div>
</section>

<!-- Terms Content Section -->
<section class="business-highlights">
    <div class="container">
        <div class="highlight-grid">
            
            <!-- Section 1 -->
            <div class="highlight-card">
                <h3><i class="fas fa-gavel"></i> 1. Geltungsbereich</h3>
                <p>Diese Allgemeinen Geschäftsbedingungen (AGB) gelten für alle Dienstleistungen der Larama Transport Service GmbH & Co. KG im Bereich des Treuhandservices für Fahrzeugtransporte.</p>
                <p>Abweichende Bedingungen des Kunden finden nur bei ausdrücklicher schriftlicher Bestätigung Anwendung.</p>
            </div>

            <!-- Section 2 -->
            <div class="highlight-card">
                <h3><i class="fas fa-handshake"></i> 2. Leistungsbeschreibung</h3>
                <p>Unser Treuhandservice umfasst folgende Dienstleistungen:</p>
                <ul style="margin: 1rem 0; padding-left: 1.5rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--accent); margin-right: 0.5rem;"></i> Abholung und Transport des Fahrzeugs</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--accent); margin-right: 0.5rem;"></i> Technische und mechanische Inspektion</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--accent); margin-right: 0.5rem;"></i> Dokumentenprüfung und -verwaltung</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--accent); margin-right: 0.5rem;"></i> Sichere Geldabwicklung über Treuhandkonto</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--accent); margin-right: 0.5rem;"></i> 14-tägige Testphase mit Rückgaberecht</li>
                </ul>
            </div>

            <!-- Section 3 -->
            <div class="highlight-card">
                <h3><i class="fas fa-credit-card"></i> 3. Zahlungsmodalitäten</h3>
                <p>Der Kaufpreis wird auf unser Treuhandkonto eingezahlt und erst nach erfolgreicher technischer Prüfung an den Verkäufer ausgezahlt.</p>
                <p>Bei Zahlungsverstößen sind wir berechtigt, Bonitätsauskünfte einzuholen oder ein Inkassounternehmen zu beauftragen.</p>
            </div>

            <!-- Section 4 -->
            <div class="highlight-card">
                <h3><i class="fas fa-search"></i> 4. Inspektion und Rückgaberecht</h3>
                <p>Wir bieten eine umfassende technische Inspektion des Fahrzeugs an. Der Käufer hat 21 Tage Zeit, das Fahrzeug bei gravierenden Mängeln zurückzugeben.</p>
                <p>Bei berechtigter Rückgabe erfolgt die Erstattung des Kaufpreises innerhalb eines Werktages.</p>
            </div>

            <!-- Section 5 -->
            <div class="highlight-card">
                <h3><i class="fas fa-balance-scale"></i> 5. Haftung und Gewährleistung</h3>
                <p>Wir haften nur bei grober Fahrlässigkeit oder Vorsatz. Die Haftung für leichte Fahrlässigkeit ist ausgeschlossen, sofern keine wesentlichen Vertragspflichten verletzt wurden.</p>
                <p>Wir übernehmen keine Haftung für technische Mängel, die nicht im Rahmen der Inspektion erkannt wurden.</p>
            </div>

            <!-- Section 6 -->
            <div class="highlight-card">
                <h3><i class="fas fa-shield-alt"></i> 6. Datenschutz</h3>
                <p>Wir verarbeiten personenbezogene Daten gemäß der geltenden Datenschutzgesetze ausschließlich zur Vertragsabwicklung.</p>
                <p>Eine Weitergabe an Dritte erfolgt nur zur Vertragserfüllung oder zur Durchsetzung von Ansprüchen.</p>
            </div>

            <!-- Section 7 -->
            <div class="highlight-card">
                <h3><i class="fas fa-file-alt"></i> 7. Schlussbestimmungen</h3>
                <p>Es gilt das Recht der Bundesrepublik Deutschland. Gerichtsstand ist der Sitz des Unternehmens.</p>
                <p>Sollten einzelne Bestimmungen unwirksam sein, bleibt die Gültigkeit der übrigen Bestimmungen unberührt.</p>
            </div>

            <!-- Fee Structure -->
            <div class="highlight-card" style="background: linear-gradient(135deg, var(--accent-dark), var(--accent)); border: none;">
                <h3><i class="fas fa-calculator"></i> Treuhandgebühren</h3>
                <p style="margin-bottom: 1.5rem;">Die niedrigen Kosten unseres sicheren Treuhandservices werden vom Verkäufer bezahlt oder geteilt.</p>
                
                <div style="display: grid; gap: 1rem; margin-top: 1.5rem;">
                    <div style="background: rgba(255,255,255,0.1); padding: 1rem; border-radius: 8px;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem;">
                            <span style="font-weight: 600;">Bis 5.000€</span>
                            <span style="font-weight: 600;">2,5%</span>
                        </div>
                        <p style="margin: 0; font-size: 0.9rem; opacity: 0.9;">Grundgebühr für kleine Fahrzeuge</p>
                    </div>
                    
                    <div style="background: rgba(255,255,255,0.1); padding: 1rem; border-radius: 8px;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem;">
                            <span style="font-weight: 600;">5.001€ - 15.000€</span>
                            <span style="font-weight: 600;">2,0%</span>
                        </div>
                        <p style="margin: 0; font-size: 0.9rem; opacity: 0.9;">Standardgebühr für mittlere Fahrzeuge</p>
                    </div>
                    
                    <div style="background: rgba(255,255,255,0.1); padding: 1rem; border-radius: 8px;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem;">
                            <span style="font-weight: 600;">Über 15.000€</span>
                            <span style="font-weight: 600;">1,5%</span>
                        </div>
                        <p style="margin: 0; font-size: 0.9rem; opacity: 0.9;">Vergünstigter Satz für teure Fahrzeuge</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
