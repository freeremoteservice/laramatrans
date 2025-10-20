<!-- Hero Section -->
<section class="hero" id="home">
    <div class="container">
        <h1 class="fade-in-up"><?= WEBSITE_NAME ?> – Ihr Partner für sicheren Autokauf</h1>
        <p class="fade-in-up delay-1">Als professioneller Treuhanddienstleister bieten wir Ihnen maximale Sicherheit beim Fahrzeugkauf mit persönlichem Berater – von der Auswahl bis zur Übergabe. <strong>Inklusive 14-tägiger Testphase mit kostenloser Rückgabe!</strong></p>
        <div class="btn-container fade-in-up delay-2">
            <a href="#contact" class="btn">Kostenlose Erstberatung</a>
            <a href="#process" class="btn btn-secondary">Unser Prozess</a>
        </div>
    </div>
</section>

<!-- Business Highlights -->
<section class="business-highlights">
    <div class="container">
        <div class="highlight-grid">
            <div class="highlight-card fade-in-up">
                <h3><i class="fas fa-award"></i> Zertifizierte Expertise</h3>
                <p>Als GmbH handeln wir mit der gebotenen Sorgfalt und unterliegen strengen Qualitätsstandards für maximale Rechtssicherheit.</p>
            </div>
            <div class="highlight-card fade-in-up delay-1">
                <h3><i class="fas fa-user-tie"></i> Persönlicher Berater</h3>
                <p>Jeder Kunde erhält einen festen Ansprechpartner, der Sie während des gesamten Kaufprozesses professionell begleitet.</p>
            </div>
            <div class="highlight-card fade-in-up delay-2">
                <h3><i class="fas fa-undo-alt"></i> 14-Tage Rückgaberecht</h3>
                <p>Testen Sie Ihr Fahrzeug 14 Tage lang in aller Ruhe. Bei Nichtgefallen können Sie es kostenlos zurückgeben - vollständige Transparenz und Sicherheit.</p>
            </div>
        </div>
    </div>
</section>

<!-- How it works Section -->
<section id="how-it-works">
    <div class="container">
        <div class="section-title">
            <h2 class="fade-in-up">So funktioniert unser Treuhandservice</h2>
            <p class="fade-in-up delay-1">Ein einfacher und sicherer Prozess für Käufer und Verkäufer</p>
        </div>
        
        <div class="advisor-highlight fade-in">
            <div class="advisor-container">
                <div class="advisor-image">
                    <img src="<?= base_url('public/img/manager.png'); ?>" alt="Ray Donovan - Ihr persönlicher Berater" class="advisor-photo">
                </div>
                <div class="advisor-info">
                    <h3><i class="fas fa-user-tie"></i> Persönlicher Berater für jeden Auftrag</h3>
                    <p>Bei <?= WEBSITE_NAME ?> wird jedem Kunden ein persönlicher Berater zugewiesen, der Sie vom ersten Kontakt bis zur erfolgreichen Übergabe des Fahrzeugs begleitet. </p>
                    
                    <div class="iban-notice">
                        <p>
                            <strong>Sicherer Zahlungsverkehr:</strong> Jedem unserer Berater wird durch die <?= WEBSITE_NAME ?> eine persönliche IBAN zugewiesen.
                            Bitte verwenden Sie für alle Zahlungen ausschließlich die IBAN und den Namen Ihres persönlichen Beraters.
                            So stellen wir einen reibungslosen Ablauf sicher – zu Ihrer und unserer Sicherheit.
                            Ihr persönlicher Berater begleitet Sie vom ersten Tag Ihres Auftrags bis zur persönlichen Fahrzeugübergabe und steht Ihnen jederzeit für Fragen zur Verfügung.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="steps">
            <div class="step fade-in">
                <div class="step-number">1</div>
                <div class="step-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3>Kontakt & Vereinbarung</h3>
                <p>Käufer und Verkäufer vereinbaren den Kauf und schalten <?= WEBSITE_NAME ?> als Treuhänder ein. Sie erhalten Ihren persönlichen Berater.</p>
            </div>
            <div class="step fade-in">
                <div class="step-number">2</div>
                <div class="step-icon">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <h3>Vorab-Check</h3>
                <p>Der Käufer bespricht mit Ihrem persönlichen Berater telefonisch den Sollzustand des Fahrzeugs.</p>
            </div>
            <div class="step fade-in">
                <div class="step-number">3</div>
                <div class="step-icon">
                    <i class="fas fa-search"></i>
                </div>
                <h3>Prüfung & Zahlung</h3>
                <p>Kaufpreis geht auf das Treuhandkonto (persönliche IBAN Ihres Beraters). Wir prüfen das Fahrzeug vor Ort. Ihr Berater hält Sie auf dem Laufenden.</p>
            </div>
            <div class="step fade-in">
                <div class="step-number">4</div>
                <div class="step-icon">
                    <i class="fas fa-truck-loading"></i>
                </div>
                <h3>Transport & Freigabe</h3>
                <p>Fahrzeug wird geliefert. Käufer hat 7 Tage Prüfzeit vor Geldtransfer an Verkäufer. Ihr Berater koordiniert alles.</p>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="benefits" id="benefits">
    <div class="benefits-bg"></div>
    <div class="container">
        <div class="section-title">
            <h2 class="fade-in-up">Ihre Vorteile mit <?= WEBSITE_NAME ?></h2>
            <p class="fade-in-up delay-1">Sicher, zuverlässig und praktisch für beide Parteien</p>
        </div>
        <div class="benefit-cards">
            <div class="benefit-card fade-in">
                <h3><i class="fas fa-user-shield"></i> Für Käufer</h3>
                <ul>
                    <li>Schutz vor Betrug und nicht gelieferten Fahrzeugen</li>
                    <li>Keine "Katze im Sack" - Vorab-Inspektion durch Experten</li>
                    <li>7-tägige Prüfzeit nach Erhalt des Fahrzeugs</li>
                    <li>Kostenkontrolle bei mangelhaften Fahrzeugen</li>
                    <li>Sichere Zahlung über Treuhandkonto</li>
                    <li><strong>Persönlicher Berater für den gesamten Prozess</strong></li>
                </ul>
            </div>
            <div class="benefit-card fade-in">
                <h3><i class="fas fa-user-shield"></i> Für Verkäufer</h3>
                <ul>
                    <li>Schutz vor Scheinkäufern und Betrug</li>
                    <li>Garantierte Zahlung nach Ablauf der Prüffrist</li>
                    <li>Attraktives Angebot für nationale und internationale Kunden</li>
                    <li>Professioneller Transportservice inklusive</li>
                    <li><strong>Persönlicher Berater für reibungslosen Verkauf</strong></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section" id="services">
    <div class="container">
        <div class="section-title">
            <h2 class="fade-in-up">Unsere Geschäftsleistungen</h2>
            <p class="fade-in-up delay-1">Umfassende Services für einen sorgenfreien Fahrzeugkauf – von der Beratung bis zur Übergabe.</p>
        </div>
        
        <div class="services-grid">
            <div class="service-card fade-in-up">
                <div class="service-header">
                    <div class="service-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="service-content">
                        <h3>Fahrzeugbewertung</h3>
                        <p>Professionelle Begutachtung und Bewertung durch zertifizierte Sachverständige. Umfassende technische und optische Prüfung für maximale Transparenz.</p>
                    </div>
                </div>
            </div>
            
            <div class="service-card fade-in-up delay-1">
                <div class="service-header">
                    <div class="service-icon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="service-content">
                        <h3>Treuhandservice</h3>
                        <p>Sichere Verwahrung Ihrer Zahlung bis zur erfolgreichen Fahrzeugübergabe. Vollständige finanzielle Absicherung durch gesonderte Treuhandkonten.</p>
                    </div>
                </div>
            </div>
            
            <div class="service-card fade-in-up delay-2">
                <div class="service-header">
                    <div class="service-icon">
                        <i class="fas fa-undo-alt"></i>
                    </div>
                    <div class="service-content">
                        <h3>14-Tage Rückgaberecht</h3>
                        <p>Testen Sie Ihr Fahrzeug 14 Tage lang in aller Ruhe. Bei Nichtgefallen kostenlose Rückgabe - ohne versteckte Kosten oder Komplikationen.</p>
                    </div>
                </div>
            </div>
            
            <div class="service-card fade-in-up">
                <div class="service-header">
                    <div class="service-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <div class="service-content">
                        <h3>Logistik & Transport</h3>
                        <p>Professionelle Transportorganisation mit vollständiger Versicherung. Inklusive spezieller Transportlösungen für anspruchsvolle Lieferungen.</p>
                    </div>
                </div>
            </div>
            
            <div class="service-card fade-in-up delay-1">
                <div class="service-header">
                    <div class="service-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div class="service-content">
                        <h3>Persönliche Betreuung</h3>
                        <p>Dedizierter Ansprechpartner für den gesamten Kaufprozess. Individuelle Beratung und Begleitung von der ersten Kontaktaufnahme bis zur Übergabe.</p>
                    </div>
                </div>
            </div>
            
            <div class="service-card fade-in-up delay-2">
                <div class="service-header">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="service-content">
                        <h3>Risikomanagement</h3>
                        <p>Umfassende Absicherung gegen finanzielle und rechtliche Risiken. Proaktive Identifikation und Minimierung potentieller Problemstellungen.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Transport Specialization Section -->
<section class="specialization-section" id="specialization">
    <div class="container">
        <div class="specialization-container">
            <div class="specialization-content">
                <h2 class="fade-in-up">Spezialisierte Transportlösungen</h2>
                <p class="fade-in-up delay-1">Wir bieten maßgeschneiderte Transportdienstleistungen für anspruchsvolle Fahrzeuglieferungen. Unsere Expertise umfasst auch spezielle Transportanforderungen mit vollständiger behördlicher Abwicklung.</p>
                
                <div class="specialization-features">
                    <div class="specialization-feature fade-in-up">
                        <i class="fas fa-home"></i>
                        <div>
                            <h4>Direktlieferung zu Privatpersonen</h4>
                            <p>Wir liefern Fahrzeuge sicher und zuverlässig direkt zu Ihnen nach Hause. Vollumfängliche Abwicklung aller Formalitäten für einen reibungslosen Prozess.</p>
                        </div>
                    </div>
                    
                    <div class="specialization-feature fade-in-up delay-1">
                        <i class="fas fa-undo-alt"></i>
                        <div>
                            <h4>14-Tage Testphase</h4>
                            <p>Testen Sie das gelieferte Fahrzeug 14 Tage lang in Ruhe. Bei Nichtgefallen kostenlose Rückgabe - Ihr Geld ist während der Testphase sicher verwahrt.</p>
                        </div>
                    </div>
                    
                    <div class="specialization-feature fade-in-up delay-2">
                        <i class="fas fa-shield-alt"></i>
                        <div>
                            <h4>Vollständig versichert</h4>
                            <p>Alle unsere Transporte sind umfassend versichert. Maximale Sicherheit für Ihr Fahrzeug während des gesamten Transportprozesses.</p>
                        </div>
                    </div>
                </div>
                
                <a href="#contact" class="btn fade-in-up delay-3" style="margin-top: 3rem;">Transport anfragen</a>
            </div>
        </div>
    </div>
</section>

<!-- Reviews Section -->
<section class="reviews-section" id="reviews">
    <div class="container">
        <div class="section-title">
            <h2 class="fade-in-up">Kundenbewertungen</h2>
            <p class="fade-in-up delay-1">Das sagen unsere zufriedenen Kunden über unsere Dienstleistungen</p>
        </div>
        
        <div class="reviews-grid">
            <div class="review-card fade-in-up">
                <div class="review-header">
                    <div class="review-info">
                        <h4>Mike Johnson</h4>
                    </div>
                </div>
                <div class="review-stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="review-text">
                    "<?= WEBSITE_NAME ?> hat meinen BMW X5 von Ramstein aus verkauft, während ich bereits zurück in den USA war. Der Prozess war reibungslos und die Kommunikation ausgezeichnet. Das Geld war innerhalb von 3 Tagen auf meinem Konto. Absolut empfehlenswert für Soldaten, die ihr Auto verkaufen müssen!"
                </div>
            </div>
            
            <div class="review-card fade-in-up delay-1">
                <div class="review-header">
                    <div class="review-info">
                        <h4>Anna Keller</h4>
                    </div>
                </div>
                <div class="review-stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="review-text">
                    "Die 14-tägige Testphase hat mir die Sicherheit gegeben, die ich brauchte. Habe den Mercedes eine Woche lang getestet und war vollkommen zufrieden. Sollte ich jemals wieder ein Auto kaufen, nur über <?= WEBSITE_NAME ?>!"
                </div>
            </div>
            
            <div class="review-card fade-in-up delay-2">
                <div class="review-header">
                    <div class="review-info">
                        <h4>Sarah Williams</h4>
                    </div>
                </div>
                <div class="review-stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="review-text">
                    "Perfekter Service! Habe mein Auto über <?= WEBSITE_NAME ?> verkauft, nachdem ich versetzt wurde. Der persönliche Berater hat alles organisiert - von der Abholung in Ramstein bis zur vollständigen Abwicklung. Kein Stress, kein Papierkram, einfach professionell. Vielen Dank!"
                </div>
            </div>
            
            <div class="review-card fade-in-up delay-3">
                <div class="review-header">
                    <div class="review-info">
                        <h4>James Miller</h4>
                    </div>
                </div>
                <div class="review-stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="review-text">
                    "Als ich unerwartet versetzt wurde, dachte ich, ich müsste mein Auto unter Wert verkaufen. <?= WEBSITE_NAME ?> hat mir den besten Preis besorgt und alles abgewickelt, während ich schon in Texas war. Besonders beeindruckt hat mich die transparente Kommunikation über den gesamten Prozess."
                </div>
            </div>

            <div class="review-card fade-in-up delay-4">
                <div class="review-header">
                    <div class="review-info">
                        <h4>James Miller</h4>
                    </div>
                </div>
                <div class="review-stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="review-text">
                    "Als ich unerwartet versetzt wurde, dachte ich, ich müsste mein Auto unter Wert verkaufen. <?= WEBSITE_NAME ?> hat mir den besten Preis besorgt und alles abgewickelt, während ich schon in Texas war. Besonders beeindruckt hat mich die transparente Kommunikation über den gesamten Prozess."
                </div>
            </div>

            <div class="review-card fade-in-up delay-5">
                <div class="review-header">
                    <div class="review-info">
                        <h4>James Miller</h4>
                    </div>
                </div>
                <div class="review-stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="review-text">
                    "Als ich unerwartet versetzt wurde, dachte ich, ich müsste mein Auto unter Wert verkaufen. <?= WEBSITE_NAME ?> hat mir den besten Preis besorgt und alles abgewickelt, während ich schon in Texas war. Besonders beeindruckt hat mich die transparente Kommunikation über den gesamten Prozess."
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tracking Section -->
<section class="tracking-section" id="tracking">
    <div class="container">
        <div class="section-title">
            <h2 class="fade-in-up">Sendungsverfolgung</h2>
            <p class="fade-in-up delay-1">Verfolgen Sie den Status Ihres Fahrzeugtransports in Echtzeit.</p>
        </div>
        
        <div class="tracking-container fade-in-up">
            <p>Als <?= WEBSITE_NAME ?> bieten wir Ihnen vollständige Transparenz über jeden Schritt des Transportprozesses - von der Abholung bis zur Lieferung direkt zu Ihnen.</p>
            
            <div class="tracking-form">
                <div class="form-group">
                    <label for="tracking-number">Sendungsnummer eingeben:</label>
                    <input type="text" id="tracking-number" placeholder="Beispiel: AB123456">
                    <div class="tracking-example">Beispiel: AB123456</div>
                </div>
                
                <div class="checkbox-group">
                    <input type="checkbox" id="agree-terms">
                    <label for="agree-terms">Ich akzeptiere die <a href="<?= base_url('site/terms_and_conditions') ?>" target="_blank">AGB der <?= WEBSITE_NAME ?></a></label>
                </div>
                
                <button class="btn" id="track-btn">Status abfragen</button>
            </div>
            
            <div class="business-contact">
                <h3>Persönlicher Support</h3>
                <p>Ihr persönlicher Berater steht Ihnen für Rückfragen jederzeit zur Verfügung. Kontaktieren Sie uns für eine individuelle Beratung - auch zur 14-tägigen Testphase.</p>
                <p><?= WEBSITE_NAME ?> – Ihr zuverlässiger Partner für sicheren Autokauf.</p>
                <a href="mailto:<?= WEBSITE_EMAIL ?>" class="btn btn-secondary">Berater kontaktieren</a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section" id="faq">
    <div class="container">
        <div class="section-title">
            <h2 class="fade-in-up">Häufig gestellte Fragen</h2>
            <p class="fade-in-up delay-1">Antworten auf die wichtigsten Fragen zu unseren Services.</p>
        </div>
        
        <div class="faq-container">
            <div class="faq-item fade-in-up">
                <div class="faq-question">Welche Vorteile bietet die <?= WEBSITE_NAME ?> als Unternehmen?</div>
                <div class="faq-answer">
                    <p>Als GmbH handeln wir mit der gebotenen rechtlichen Sorgfalt und unterliegen strengen Compliance-Richtlinien. Dies bietet Ihnen maximale Sicherheit und Verlässlichkeit. Zudem verfügen wir über zertifizierte Prozesse und versicherte Services.</p>
                </div>
            </div>
            
            <div class="faq-item fade-in-up delay-1">
                <div class="faq-question">Wie funktioniert die 14-tägige Testphase?</div>
                <div class="faq-answer">
                    <p>Nach Erhalt Ihres Fahrzeugs haben Sie 14 Tage Zeit, es in aller Ruhe zu testen. Sie können das Fahrzeug unter realen Bedingungen fahren und prüfen. Sollte es Ihnen nicht gefallen oder sollten Mängel auftreten, können Sie es kostenlos zurückgeben. Ihr Geld wird während dieser Zeit auf unserem Treuhandkonto verwahrt und erst nach Ablauf der Testphase an den Verkäufer freigegeben.</p>
                </div>
            </div>
            
            <div class="faq-item fade-in-up delay-2">
                <div class="faq-question">Sind die Services versichert?</div>
                <div class="faq-answer">
                    <p>Ja, alle unsere Leistungen sind umfassend versichert. Dies beinhaltet Transportversicherungen, Haftpflichtversicherungen und weitere Absicherungen zum Schutz Ihrer Interessen.</p>
                </div>
            </div>
            
            <div class="faq-item fade-in-up delay-1">
                <div class="faq-question">Bieten Sie spezielle Transportdienstleistungen an?</div>
                <div class="faq-answer">
                    <p>Ja, wir bieten maßgeschneiderte Transportlösungen für verschiedene Anforderungen, inklusive spezieller Lieferungen mit behördlichen Genehmigungen. Kontaktieren Sie uns für eine individuelle Beratung zu Ihren Transportbedürfnissen.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section" id="contact">
    <div class="container">
        <h2 class="fade-in-up">Starten Sie Ihren sicheren Autokauf</h2>
        <p class="fade-in-up delay-1">Vereinbaren Sie ein unverbindliches Beratungsgespräch mit unserem Expertenteam. Wir zeigen Ihnen, wie Sie von unseren professionellen Services profitieren - inklusive 14-tägiger Testphase mit kostenloser Rückgabe.</p>
        <a href="mailto:<?= WEBSITE_EMAIL ?>" class="cta-btn fade-in-up delay-2">Jetzt Termin vereinbaren</a>
    </div>
</section>

