<?PHP

/**
 *
 * @package   phpBB Extension - Oxpus Downloads
 * @copyright 2002-2021 OXPUS - www.oxpus.net
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

/*
* [ dutch ] language file for Download Extension
*/

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'HELP_TITLE' => 'Download Extension Online Help',

	'DL_NO_HELP_AVAILABLE' => 'Er is geen hulp beschikbaar voor deze optie',

	'HELP_DL_ACTIVE'			=> 'Schakelt de downloads in en uit volgens de volgende opties.',
	'HELP_DL_APPROVE'			=> 'Dit keurt de download onmiddellijk goed na het indienen van dit formulier.<br>Anders wordt deze download verborgen voor gebruikers totdat deze is goedgekeurd door een downloadmoderator of beheerder.',
	'HELP_DL_APPROVE_COMMENTS'	=> 'Als u deze optie uitschakelt, moet elke nieuwe opmerking worden goedgekeurd door een downloadmoderator of beheerder voordat andere gebruikers deze kunnen zien.',


	'HELP_DL_CAT_DESCRIPTION'	=> 'Een korte beschrijving van deze categorie.<br>BBCodes zijn alleen beschikbaar als de beschrijving altijd op de indexpagina wordt weergegeven.<br>Deze beschrijving wordt getoond op de downloadindex en bij subcategorieen.',
	'HELP_DL_CAT_EDIT_LINK'		=> 'Bepaalt wie de link om een download te bewerken vanuit de categorieweergave kan zien en gebruiken, mits deze optie niet is uitgeschakeld.<br>\'Eigen downloads\' is alleen actief als de optie om eigen downloads te bewerken ook is ingeschakeld.',
	'HELP_DL_CAT_ICON'			=> 'Het categoriepictogram moet al zijn geupload naar het forum, bijv. in de map /images/dl_icons/ (deze map moet worden aangemaakt voordat de pictogrammen erin kunnen worden geupload).<br>Voer de relatieve URL in vanaf de forumhoofdmap, bijv. images/dl_icon.gif.<br><br>Gebruik alleen pictogrammen die door een webbrowser kunnen worden weergegeven.<br>Aanbevolen bestanden zijn JPG, GIF of PNG.<br>Let op de afmetingen van de pictogrammen om de downloadindex niet te verstoren, omdat de pictogrammen niet worden verkleind voor gebruik.',
	'HELP_DL_CAT_NAME'			=> 'Dit is de naam van de categorie die overal wordt weergegeven.<br>Gebruik geen speciale tekens om moeilijk leesbare items in de keuzelijst te voorkomen.',
	'HELP_DL_CAT_PARENT'		=> 'Het hoogste niveau of een andere categorie waaraan deze categorie kan worden toegewezen.<br>U kunt hierarchische structuren voor uw downloads opbouwen met dit dynamische keuzemenu.',
	'HELP_DL_CAT_PATH'			=> 'Voer hier een bestaand pad naar uw downloads in.<br>Deze waarde moet de naam zijn van een submap onder de hoofdmap (bijv. downloads/) die u heeft gedefinieerd in de hoofdconfiguratie.<br>Voer de mapnaam in met een afsluitende schuine streep.<br>Als voorbeeld voor de bestaande map \'downloads/mods/\' voer \'mods/\' in als categoriepad.<br>Na het indienen van dit formulier wordt de map gecontroleerd.<br>Zorg ervoor dat de opgegeven submap echt bestaat!<br>Als de map een submap van een submap is, voer dan de volledige hierarchie in.<br>Bijv. \'downloads/mods/misc/\' moet worden ingevoerd als categoriepad \'mods/misc/\'.<br>Zorg ervoor dat elke submap de rechten CHMOD 777 heeft en houd er rekening mee dat Unix/Linux hoofdlettergevoelige mapnamen heeft.',
	'HELP_DL_CAT_RULES'			=> 'Deze regels worden weergegeven boven de subcategorieen en downloads bij het bekijken van de categorie.',
	'HELP_DL_CHOOSE_CATEGORY'	=> 'Kies de categorie om deze download in te plaatsen.<br>Het bestand moet al zijn opgeslagen in de map die u heeft ingevoerd in het categoriebeheer voordat u deze download kunt opslaan.<br>Anders ontvangt u een foutmelding.',
	'HELP_DL_COMMENTS'			=> 'Activeer het opmerkingensysteem voor deze categorie.<br>Gebruikers die zijn ingeschakeld via de volgende keuzemenu\'s kunnen opmerkingen bekijken en/of plaatsen in deze categorie.<br>Beheerders en downloadmoderatoren kunnen alle opmerkingen bewerken en verwijderen, auteurs kunnen hun eigen teksten beheren.',
	'HELP_DL_COPY_PERMISSIONS'	=> 'Kopieert de rechten van de geselecteerde categorie.<br>Als u de bovenliggende categorie heeft geselecteerd, krijgt deze categorie de rechten van de bovenliggende categorie waaraan deze wordt toegevoegd.<br>Als de bovenliggende categorie de downloadindex (hoogste niveau) is, krijgt deze categorie geen rechten. Kies in dat geval een andere categorie of stel de rechten in voor deze categorie via de rechtenmodule.',

	'HELP_DL_DISABLE_NOTIFY'		=> 'Met deze optie kunt u meldingen over nieuw toegevoegde of bewerkte downloads in- of volledig uitschakelen.<br>Als deze functie is ingeschakeld, kan deze individueel worden uitgeschakeld bij het toevoegen of bewerken van een download.<br>Gebruikers ontvangen alleen een melding als ze de meldingen over nieuwe of bewerkte downloads in hun UCP hebben geactiveerd.',
	'HELP_DL_DISABLE_POPUP_NOTIFY'	=> 'Als deze optie is ingeschakeld, wordt het registreren van het tijdstempel voor het bewerken van een download uitgeschakeld.',

	'HELP_DL_EDIT_OWN_DOWNLOADS'	=> 'Als u deze optie inschakelt, kan elke gebruiker zijn eigen geuploade bestanden bewerken zonder beheerder of downloadmoderator te zijn.',
	'HELP_DL_EDIT_TIME'				=> 'Voer hier het aantal dagen in dat een bewerkte download gemarkeerd blijft.<br>Voer 0 in om deze functie uit te schakelen.',
	'HELP_DL_ENABLE_INDEX_DESC'		=> 'Verbergt de beschrijving van de downloads in de categorieweergave.<br>Als deze optie is ingeschakeld, kan de lengte van de weergegeven beschrijving worden ingesteld met de volgende optie.',
	'HELP_DL_ENABLE_JUMPBOX'		=> 'Deze optie toont of verbergt de keuzelijst in de downloadvoettekst.<br>Het uitschakelen van de keuzelijst verbetert de prestaties van uw downloadpaneel.',
	'HELP_DL_ENABLE_RATE'			=> 'Met deze optie kunt u het beoordelingssysteem in-/uitschakelen.<br>Bestaande beoordelingspunten worden niet verwijderd bij het uitschakelen van het beoordelingssysteem, maar worden opgeslagen en direct weer getoond als u het beoordelingssysteem opnieuw inschakelt.',
	'HELP_DL_ENABLE_SEARCH_DESC'	=> 'Verbergt de downloadbeschrijving in de zoekresultaten.<br>Als deze optie is uitgeschakeld, kan de lengte van de weergegeven beschrijving worden ingesteld met de volgende optie.',
	'HELP_DL_ENABLE_TOPIC'			=> 'Maakt het mogelijk om een onderwerp aan te maken in het volgende forum en met de opgegeven tekst voor elke nieuwe download die wordt geupload of toegevoegd via het beheerpaneel. Als een download eerst moet worden goedgekeurd voordat deze wordt weergegeven, wordt het onderwerp daarna aangemaakt via het moderatiepaneel.',
	'HELP_DL_EXT_NEW_WINDOW'		=> 'Opent externe downloads in een nieuw browservenster of laadt ze in het huidige venster.',
	'HELP_DL_EXTERN'				=> 'Activeer deze functie om een URL buiten uw eigen server in te voeren in de bovenstaande regel (bijv. http://www.voorbeeld.com/media.mp3).<br>In dit geval wordt de \'gratis\' instelling overbodig.<br>Optioneel kunt u de bestandsgrootte voor de externe download invoeren. Deze grootte wordt weergegeven op alle pagina\'s en kan worden bewerkt.<br>Houd er rekening mee dat de bestandsgrootte wordt weergegeven als de download niet als extern is gemarkeerd. In dat geval worden wijzigingen van deze waarde genegeerd en vervangen door de werkelijke bestandsgrootte van de download.',
	'HELP_DL_EXTERN_UP'				=> 'Activeer deze functie om een URL buiten uw eigen server in te voeren in het veld rechts (bijv. http://www.voorbeeld.com/media.mp3).<br>In dit geval wordt de \'gratis\' instelling overbodig.',

	'HELP_DL_FILE_DESCRIPTION'	=> 'Een korte beschrijving voor deze download.<br>Dit wordt ook weergegeven in de downloadcategorie.<br>BBCodes zijn uitgeschakeld voor deze tekst.<br>Voer alleen een korte tekst in om zware gegevensbelasting bij het openen van de categorie te verminderen.',
	'HELP_DL_FILE_EDIT_HINT'	=> 'Maakt een verklarende tekst mogelijk bij het toevoegen of bewerken van een download. Deze tekst is prominent zichtbaar aan het begin van het formulier.<br>BBCodes zijn mogelijk.',
	'HELP_DL_FILE_HASH_ALGO'	=> 'Bepaalt de methode die wordt gebruikt om de hashwaarde voor elke download te berekenen.<br>Een hashwaarde wordt berekend voor alle downloads en alle bestaande varianten, maar wordt alleen getoond in de downloaddetails wanneer de betreffende instellingen zijn ingeschakeld.<br>Beschikbare methoden zijn md5 en sha1 omdat deze methoden meestal standaard op de servers zijn geinstalleerd.<br>De extensie berekent de hashwaarde automatisch bij het toevoegen of bewerken van een download. Ook wordt de hashwaarde berekend bij het openen van de detailweergave als er nog geen hashwaarde was berekend en opgeslagen. Dit is voornamelijk bedoeld voor een bijgewerkte extensie of als u de hashmethode heeft gewijzigd.<br><br><strong>Opmerking:</strong><br>Als de methode voor het berekenen van de hashwaarde wordt gewijzigd, worden alle bestaande hashwaarden verwijderd, omdat ze niet zijn opgebouwd met de momenteel geselecteerde methode!',
	'HELP_DL_FILES_EXTERN'		=> 'URL van een extern bestand',
	'HELP_DL_FILES_INTERN'		=> 'De bestandsnaam van deze download.<br>Voer deze naam in zonder een voorafgaand bestandspad of schuine streep.<br>Het bestand moet bestaan voordat u deze download opslaat, anders ontvangt u een foutmelding.<br>Houd er rekening mee dat het gebruik van verboden bestandsextensies het opslaan van het bestand blokkeert!',

	'HELP_DL_GLOBAL_BOTS'		=> 'Deze optie staat bots toe of weigert de toegang tot het downloadgebied.<br>Alle andere rechten worden niet beinvloed door deze optie.',
	'HELP_DL_GLOBAL_GUESTS'		=> 'Deze optie staat gasten toe of weigert de toegang tot het downloadgebied.<br>Alle andere rechten worden niet beinvloed door deze optie.',
	'HELP_DL_GUEST_STATS_SHOW'	=> 'Deze optie neemt de statistische gegevens over gasten op in of sluit deze uit van de publieke categoriestatistieken.<br>Het script blijft alle gegevens verzamelen.<br>Het ACP-statistiekenhulpmiddel toont altijd de volledige statistische gegevens.',

	'HELP_DL_HACK_AUTOR'			=> 'De auteur van dit downloadbestand.<br>Laat leeg om deze waarde te verbergen in de downloaddetails en het overzicht.',
	'HELP_DL_HACK_AUTOR_EMAIL'		=> 'Het e-mailadres van de auteur.<br>Laat leeg om deze waarde te verbergen in de downloaddetails en het overzicht.',
	'HELP_DL_HACK_AUTOR_WEBSITE'	=> 'De website van de auteur.<br>Deze URL moet de website van de auteur zijn, niet de URL voor de download (niet altijd hetzelfde).<br>Voer geen links in naar websites met eigendomsrechtelijk beschermde of twijfelachtige inhoud.',
	'HELP_DL_HACK_DL_URL'			=> 'De URL naar een alternatieve download voor dit bestand.<br>Dit kan de website van de auteur zijn of een andere alternatieve website.<br>Voer alleen links in voor een directe download als de auteur hier expliciet toestemming voor heeft gegeven.',
	'HELP_DL_HACK_VERSION'			=> 'De versie van de downloadrelease.<br>Dit wordt alleen weergegeven op de downloadpagina.<br>Deze waarde is niet doorzoekbaar.',
	'HELP_DL_HOTLINK_ACTION'		=> 'Hier kunt u kiezen hoe het downloadscript moet reageren als een directe link naar een download is geblokkeerd (zie ook de laatste optie).<br>Het toont een bericht (vermindert de serverbelasting) of het stuurt door naar de download (produceert extra verkeer).',

	'HELP_DL_ICON_FREE_FOR_REG'		=> 'Als deze optie is ingeschakeld, wordt het downloadpictogram voor gasten ook wit weergegeven (gratis download voor geregistreerde gebruikers).<br>Als u deze optie uitschakelt, zien gasten het rode pictogram in plaats van het witte.',
	'HELP_DL_INDEX_DESC_HIDE'		=> 'Verbergt de beschrijvingen voor de categorieen op de downloadindex en voor subcategorieen.<br>De beschrijvingen verschijnen dan bij het bewegen van de muisaanwijzer over de categorierij.',
	'HELP_DL_IS_FREE'				=> 'Schakel deze instelling in als de download voor iedereen gratis moet zijn en niet op het verkeersaccount moet worden afgeschreven.<br>Kies \'Gratis voor geregistreerde gebruikers\' om een gratis download alleen voor geregistreerde gebruikers in te schakelen.',

	'HELP_DL_KLICKS_RESET'			=> 'Deze optie reset de klikken voor de huidige maand naar nul.<br>Dit is handig als u de klikken wilt controleren na het bijwerken van de bestandsrelease.',

	'HELP_DL_LATEST_COMMENTS'		=> 'Deze optie toont de laatste X opmerkingen bij de downloaddetails. Voer 0 in om dit blok uit te schakelen.',
	'HELP_DL_LATEST_DOWNLOADS'		=> 'Bepaalt of deze lijst is uitgeschakeld, alle downloads toont (dit komt overeen met het totaaloverzicht, aflopend gesorteerd op leeftijd) of de laatst toegevoegde of gewijzigde downloads.',
	'HELP_DL_LIMIT_DESC_ON_INDEX'	=> 'Kort de downloadbeschrijvingen in de categorieen af na het ingevoerde aantal tekens.<br>Stel hier 0 in om deze functie uit te schakelen.',
	'HELP_DL_LIMIT_DESC_ON_SEARCH'	=> 'Kort de downloadbeschrijvingen in zoekresultaten af na het ingevoerde aantal tekens.<br>Stel hier 0 in om deze functie uit te schakelen.',
	'HELP_DL_LINKS_PER_PAGE'		=> 'Deze optie bepaalt het aantal downloads dat op elke categoriepagina en ACP-statistieken wordt weergegeven.<br>In de hacklijst en het overzicht wordt de foruminstelling \'onderwerpen per pagina\' gebruikt.',

	'HELP_DL_MOD_DESC'			=> 'Gedetailleerde beschrijving van de ingevoerde extensie.<br>Gebruik van BBCodes en smileys is mogelijk, regelafbrekingen worden ook meegenomen.<br>Deze tekst wordt alleen getoond in de downloaddetails.',
	'HELP_DL_MOD_DESC_ALLOW'	=> 'Schakelt het extensie-informatieblok in bij het toevoegen of bewerken van een download.',
	'HELP_DL_MOD_LIST'			=> 'Activeer de weergave van dit blok in de downloaddetails.<br>Indien uitgeschakeld wordt het volledige blok niet weergegeven.',
	'HELP_DL_MOD_REQUIRE'		=> 'Geeft aan welke andere extensies een gebruiker nodig heeft om deze download te installeren of te gebruiken.<br>Deze tekst wordt alleen getoond in de downloaddetails.',
	'HELP_DL_MOD_TEST'			=> 'Geeft aan op welke phpBB-versie deze extensie succesvol is getest.<br>Voer gewoon de versie in van het testforum.<br>Het script geeft dit weer als \'phpBB X\', dus u hoeft alleen \'X\' in te voeren.<br>Deze tekst wordt alleen getoond in de downloaddetails.',
	'HELP_DL_MOD_TODO'			=> 'Hier kunt u de volgende stappen invoeren die u heeft gepland voor deze extensie of die momenteel in bewerking zijn.<br>Dit maakt de takenlijst aan die kan worden geopend vanuit de downloadvoettekst.<br>Met deze tekst kunnen gebruikers worden geinformeerd over de laatste status van deze extensie.<br>Regelafbrekingen worden meegenomen maar BBCodes zijn niet beschikbaar.<br>De takenlijst kan nog steeds worden gevuld als dit blok is uitgeschakeld.',
	'HELP_DL_MOD_WARNING'		=> 'Belangrijke waarschuwing over deze extensie die in acht moet worden genomen bij installatie, gebruik of interactie met andere extensies.<br>Deze tekst wordt gemarkeerd weergegeven in de downloaddetails (standaard is rood).<br>Regelafbrekingen worden meegenomen.<br>BBCodes zijn hier niet beschikbaar.',
	'HELP_DL_MUST_APPROVE'		=> 'Schakel deze optie in om goedkeuring af te dwingen voor elk nieuw geupload downloadbestand voordat het in deze categorie wordt weergegeven.<br>Beheerders en downloadmoderatoren worden per e-mail op de hoogte gebracht van niet-goedgekeurde nieuwe downloads.',

	'HELP_DL_NAME'					=> 'Dit is de naam van de download waaronder deze in de gehele extensie wordt weergegeven.<br>Gebruik geen speciale tekens om fouten te voorkomen.',
	'HELP_DL_NEW_TIME'				=> 'Voer het aantal dagen in dat een download als nieuw wordt gemarkeerd.<br>Voer 0 in om deze functie uit te schakelen.',
	'HELP_DL_NO_CHANGE_EDIT_TIME'	=> 'Vink deze optie aan om het bijwerken van de laatste bewerkingstijd van deze download te onderdrukken.<br>E-mail- en popupmeldingen/forumberichten worden niet beinvloed.',

	'HELP_DL_OFF_HIDE'					=> 'Verbergt de link in de forumnavigatie.<br>Anders toont het downloadgebied alleen een bericht.',
	'HELP_DL_OFF_NOW_TIME'				=> 'Deactiveert de downloads onmiddellijk of regelmatig tussen de volgende tijden.',
	'HELP_DL_OFF_PERIOD'				=> 'Tijdsperiode waarin de download automatisch wordt uitgeschakeld.',
	'HELP_DL_OFF_PERIOD_TILL'			=> 'Tijdsperiode waarin de download automatisch wordt uitgeschakeld.',
	'HELP_DL_ON_ADMINS'					=> 'Staat forumbeheerders toe om het downloadgebied te betreden en erin te werken terwijl de downloadextensie is uitgeschakeld.<br>Anders worden de beheerders ook buitengesloten.',
	'HELP_DL_OVERVIEW_LINK'				=> 'Toont de link naar de overzichtslijst of verbergt deze.<br>Opmerking:<br>Als de link is uitgeschakeld, kan de overzichtslijst niet worden geopend via een directe link!',

	'HELP_DL_PHYSICAL_QUOTA'	=> 'De totale fysieke limiet die de extensie mag gebruiken om downloads op te slaan en te beheren.<br>Als deze limiet is bereikt, kunnen nieuwe downloads alleen worden toegevoegd via een FTP-client en het bestandsbeheer in het ACP.',
	'HELP_DL_PREVENT_HOTLINK'	=> 'Schakel deze optie in als u directe downloadlinks wilt voorkomen behalve vanuit de downloaddetails.<br>Deze optie beschermt uw downloadmappen <strong>niet</strong>!',

	'HELP_DL_RATE_POINTS'			=> 'Stelt het maximale aantal beoordelingspunten in dat een gebruiker aan een download kan toekennen.<br><br><strong>Let op:</strong><br>Als u deze instelling wijzigt, worden alle toegekende beoordelingspunten verwijderd zodat de extensie correcte beoordelingspunten kan berekenen!',
	'HELP_DL_REPORT_BROKEN'			=> 'Schakelt de functie om defecte downloads te melden in of uit.<br>Als u dit instelt op \'niet voor gasten\' kunnen alleen geregistreerde gebruikers defecte downloads melden.',
	'HELP_DL_REPORT_BROKEN_LOCK'	=> 'Als u deze optie inschakelt, wordt de download uitgeschakeld terwijl deze als defect is gemeld.<br>Dit verbergt de downloadknop en voorkomt dat iemand dit bestand downloadt totdat een beheerder of downloadmoderator het opnieuw inschakelt.',
	'HELP_DL_REPORT_BROKEN_MESSAGE'	=> 'Als een download als defect is gemeld, wordt dit aangekondigd met een bericht.<br>Als u deze optie inschakelt, wordt het bericht alleen weergegeven in plaats van de downloadknop terwijl de download is vergrendeld.',
	'HELP_DL_REPORT_BROKEN_VC'		=> 'Schakelt een visuele bevestigingscode in als een gebruiker een defecte download meldt.<br>Deze melding wordt dan alleen opgeslagen als de juiste code is ingevoerd en dienovereenkomstig worden beheerders en downloadmoderatoren per e-mail geinformeerd.',

	'HELP_DL_RSS_ENABLE'				=> 'Schakelt de RSS Feed voor downloads in.<br>Indien uitgeschakeld bepalen de volgende twee opties wat de gebruiker in plaats van de feed ziet.',
	'HELP_DL_RSS_OFF_ACTION'			=> 'Met deze optie wordt het gedrag van de uitgeschakelde feed bepaald.',
	'HELP_DL_RSS_OFF_TEXT'				=> 'Deze tekst wordt weergegeven in plaats van de downloaditems in de RSS feed als de feed is uitgeschakeld en de vorige optie is ingesteld om dit bericht weer te geven.<br>Als doorverwijzing is ingesteld in de vorige optie, blijft deze tekst actief maar wordt niet weergegeven.',
	'HELP_DL_RSS_CATS'					=> 'De items in de RSS feed worden overgenomen uit alle of geselecteerde categorieen uit de lijst in deze optie.<br>Om meer dan een categorie te selecteren, houd de CTRL-toets ingedrukt terwijl u op de categorienamen klikt.<br>U kunt kiezen om de geselecteerde of niet-geselecteerde categorieen in de feed op te nemen.',
	'HELP_DL_RSS_PERMS'					=> 'Ondanks de selectie van de categorieen waaruit items moeten worden weergegeven, is het raadzaam om de rechten van de gebruiker in te stellen op aanmelden of zelfs nauwer op die van gasten of bots om te voorkomen dat downloads in de feed worden weergegeven die de gebruiker niet zou moeten kunnen zien.<br>Bij de \'voor gasten\' instelling worden alleen die categorieen geselecteerd die een gast zou moeten kunnen zien.<br>Als de gebruiker of gast/bot geen feeds worden getoond vanwege de geselecteerde categorieen en de toegangsrechten, gedraagt de feed zich analoog aan de instellingen alsof deze is uitgeschakeld.',
	'HELP_DL_RSS_NEW_UPDATE'			=> 'Deze optie markeert nieuwe of bijgewerkte downloads zoals het minipictogram in de categorieweergave',
	'HELP_DL_RSS_NUMBER'				=> 'Het maximale aantal downloads dat in de feed wordt weergegeven.',
	'HELP_DL_RSS_SELECT'				=> 'Deze optie bepaalt of de meest recente of willekeurige downloads in de feed worden vermeld, afhankelijk van de geselecteerde categorieen, toegangsrechten en het aantal.',
	'HELP_DL_RSS_DESC_LENGTH'			=> 'Met deze optie kunt u de downloadbeschrijvingen weergeven of een verkorte beschrijving kiezen (volgens de instelling voor de downloadindex).<br><br><strong>Let op:</strong><br>Aangezien niet elke feedreader HTML-codes herkent en/of weergeeft, kan het voorkomen dat de tekst onjuist wordt weergegeven of dat de reader gewoon geen items weergeeft. In dat geval moet de gebruiker een andere reader gebruiken of moeten de beschrijvingen worden uitgeschakeld.',
	'HELP_DL_RSS_DESC_LENGTH_SHORTEN'	=> 'Kort de beschrijving van de downloads af na x tekens als de beschrijving in verkorte vorm moet worden weergegeven (zie vorige optie).<br>Indien ingesteld op 0 wordt de beschrijving niet weergegeven!',

	'HELP_DL_SET_ADD'				=> 'Met deze optie kunt u de gebruikersnaam selecteren waaronder nieuwe downloads worden gepubliceerd.<br>U kunt de huidige gebruiker selecteren, een gebruiker die is geselecteerd via de categorie-instellingen (als u hier \'categorieselectie\' heeft gekozen) of een andere gebruiker die is geregistreerd in het forum.<br><br>Houd er rekening mee dat het automatisch gegenereerde downloadonderwerp in het forum nog steeds de opgegeven gebruiker voor die functie gebruikt. Deze optie wijzigt alleen de \'toevoeggebruiker\' instelling voor nieuwe downloads.<br><br><strong>Opmerking:</strong><br>De gebruikers-ID wordt niet gecontroleerd door de downloadextensie zelf, dus een niet-bestaande ID kan de functies verstoren!',
	'HELP_DL_SHORTEN_EXTERN_LINKS'	=> 'Voer de lengte in van de weergegeven externe downloadlink in de downloaddetails.<br>Op basis van de lengte van de link wordt deze in het midden afgekort of van rechts ingekort.<br>Laat dit veld leeg of voer 0 in om deze functie uit te schakelen.',
	'HELP_DL_SHOW_FOOTER_EXT_STATS'	=> 'Toont het totale verkeer voor geregistreerde gebruikers en gasten en het aantal klikken voor de huidige maand in de downloadvoettekst.',
	'HELP_DL_SHOW_FILE_HASH'		=> 'Toont of verbergt de bestandshash in de downloaddetails.',
	'HELP_DL_SHOW_FOOTER_LEGEND'	=> 'Deze optie schakelt de legenda van downloadstatuspictogrammen in de downloadvoettekst in en uit.<br>De pictogrammen naast de downloads worden niet gewijzigd door deze optie.',
	'HELP_DL_SHOW_FOOTER_STAT'		=> 'Deze optie schakelt de ministatistiek in de downloadvoettekst in en uit.<br>Zelfs als uitgeschakeld blijft de statistiek gegevens verzamelen.',
	'HELP_DL_SHOW_REAL_FILETIME'	=> 'Deze optie toont de werkelijke laatste bewerkingstijd van de downloadbestanden in de downloaddetails.<br>Dit is de meest exacte tijdcode, zelfs voor bestanden die zijn geupload met een FTP-client of meerdere keren zijn bijgewerkt zonder dit te registreren.',
	'HELP_DL_SIMILAR_DL'			=> 'Toont vergelijkbare downloads uit dezelfde categorie in de detailweergave.<br><br>Let op: bij grotere downloaddatabases kan deze optie de laadtijd van de detailweergave verhogen, dus deze optie moet dan worden uitgeschakeld.',
	'HELP_DL_SIMILAR_DL_LIMIT'		=> 'Aantal vergelijkbare downloads dat wordt weergegeven op de downloaddetailspagina.',
	'HELP_DL_SORT_PREFORM'			=> 'De optie \'Voorinstelling\' sorteert alle downloads in alle categorieen voor alle gebruikers zoals ze zijn gesorteerd in het ACP.<br>Met de optie \'Gebruiker\' kan elke gebruiker bepalen hoe downloads voor hem/haar worden gesorteerd en of deze sortering vast is of wordt uitgebreid met andere sorteercriteria.',
	'HELP_DL_STAT_PERM'				=> 'Selecteer hier vanaf welk gebruikersniveau de downloadstatistieken kunnen worden bekeken.<br>Als u bijvoorbeeld alleen downloadmoderatoren activeert, kan elke beheerder en downloadmoderator (NIET forummoderator!) deze pagina openen en bekijken.<br>Houd er rekening mee dat deze pagina extreem lang kan laden, dus het is aanbevolen om deze pagina niet voor te veel gebruikerscategorieen open te stellen als u een groot forum heeft en/of veel downloads aanbiedt.',
	'HELP_DL_STATISTICS'			=> 'Schakelt gedetailleerde statistieken over de downloadbestanden in.<br>Houd er rekening mee dat deze statistieken extra databasequery\'s en datasets in een aparte tabel produceren.',
	'HELP_DL_STATS_PRUNE'			=> 'Voer het aantal gegevensrijen in dat de statistiek voor deze categorie kan bereiken.<br>Elke nieuwe rij verwijdert dan de oudste.<br>Voer hier 0 in om het opschonen uit te schakelen.',
	'HELP_DL_STOP_UPLOADS'			=> 'Met deze optie kunt u uploads in- of uitschakelen.<br>Als u deze optie uitschakelt, kunnen alleen beheerders nieuwe bestanden uploaden via het uploadformulier.<br>Schakel deze optie in om gebruikers toe te staan bestanden te uploaden afhankelijk van de categorie- en groepsrechten.',

	'HELP_DL_THUMB'						=> 'Met dit veld kunt u een miniatuurafbeelding uploaden (let op de bestandsgrootte en afbeeldingsafmetingen onder dit veld) om deze weer te geven in de downloaddetails.<br>Als er al een miniatuur bestaat, kunt u een nieuwe uploaden om deze te vervangen.<br>Als u het vakje \'verwijderen\' van een bestaande miniatuur aanvinkt, wordt deze verwijderd.',
	'HELP_DL_THUMB_CAT'					=> 'Deze optie schakelt miniaturen in voor downloads in deze categorie.<br>De maximale grootte van deze miniaturen is gebaseerd op de instellingen in de hoofdconfiguratie van deze extensie.',
	'HELP_DL_THUMB_CAT_MAX'				=> 'Deze optie beperkt het maximale aantal miniaturen per download. Minimaal een miniatuur is toegestaan.',
	'HELP_DL_THUMB_MAX_DIM_X'			=> 'Deze waarde beperkt de mogelijke afbeeldingsbreedte van geuploade miniaturen.<br>Miniaturen worden kleiner weergegeven, u kunt de geuploade afbeelding bekijken in een popupvenster door op een miniatuur te klikken.<br><br>Voer 0 in om miniaturen uit te schakelen (niet aanbevolen als de bestandsgrootte voor miniaturen is ingesteld).<br>Bestaande miniaturen worden nog steeds weergegeven tenzij de bestandsgrootte van de miniatuur op 0 is ingesteld.',
	'HELP_DL_THUMB_MAX_DIM_X_MAX'		=> 'Deze waarde bepaalt de weergegeven breedte van de miniaturen in pixels. Bredere afbeeldingen worden verkleind weergegeven tot de opgegeven grootte.',
	'HELP_DL_THUMB_MAX_DIM_Y'			=> 'Deze waarde beperkt de mogelijke afbeeldingshoogte van geuploade miniaturen.<br>Miniaturen worden kleiner weergegeven, u kunt de geuploade afbeelding bekijken in een popupvenster door op een miniatuur te klikken.<br><br>Voer 0 in om miniaturen uit te schakelen (niet aanbevolen als de bestandsgrootte voor miniaturen is ingesteld).<br>Bestaande miniaturen worden nog steeds weergegeven tenzij de bestandsgrootte van de miniatuur op 0 is ingesteld.',
	'HELP_DL_THUMB_MAX_DIM_Y_MAX'		=> 'Deze waarde bepaalt de weergegeven hoogte van de miniaturen in pixels. Hogere afbeeldingen worden verkleind weergegeven tot de opgegeven grootte.',
	'HELP_DL_THUMB_MAX_SIZE'			=> 'Voer 0 in als bestandsgrootte om miniaturen in alle categorieen uit te schakelen.<br>Als u miniaturen inschakelt door een bestandsgrootte op te geven, voer dan de maximale afbeeldingsgrootte in voor de geuploade afbeeldingen waarvan nieuwe miniaturen worden gemaakt.<br>Als u miniaturen uitschakelt, worden bestaande miniaturen niet meer weergegeven in de downloaddetails.',
	'HELP_DL_TODO_LINK'					=> 'Schakelt de link van de takenlijst in de downloadvoettekst in of uit.<br>De takenlijstgegevens en hun beheer binnen de download worden niet beinvloed door deze optie.',
	'HELP_DL_USE_TODOLIST'				=> 'Schakelt de takenlijst in of uit.',
	'HELP_DL_TOPIC_DETAILS'				=> 'Toont de downloadbeschrijving, de bestandsnaam, bestandsgrootte of voor externe downloads de URL in het forumonderwerp.<br>Deze tekst kan boven of onder de eerder ingevoerde tekst worden geplaatst.<br>Als het onderwerp wordt aangemaakt via de downloadcategorie, wordt de optie in de algemene configuratie genegeerd.',
	'HELP_DL_TOPIC_FORUM'				=> 'Het forum dat alle nieuwe onderwerpen over de downloads weergeeft.<br>Om het forum voor downloadonderwerpen per categorie te selecteren, kiest u de optie \'Categorieselectie\' in plaats van een forum.',
	'HELP_DL_TOPIC_FORUM_C'				=> 'Het forum dat alle nieuwe onderwerpen over de downloads uit deze categorie weergeeft.',
	'HELP_DL_TOPIC_POST_CATNAME'		=> 'Voegt de categorienaam toe aan het onderwerpbericht dat voor downloads wordt gegenereerd. De categorienaam wordt ingevoegd na de downloadtitel.<br>Let op:<br>Bestaande onderwerpen worden niet bijgewerkt tenzij de betreffende download wordt bijgewerkt.',
	'HELP_DL_TOPIC_TEXT'				=> 'Vrije tekst voor het aanmaken van de onderwerpen over de downloads. BBCodes, HTML en smileys zijn niet toegestaan omdat de tekst alleen bedoeld is om het onderwerp in te leiden.',
	'HELP_DL_TOPIC_TITLE_CATNAME'		=> 'Voegt de categorienaam toe aan de onderwerptitel die voor een download wordt gegenereerd. De categorienaam wordt gescheiden door \'-\' van de downloadnaam.<br>Let op:<br>Bestaande onderwerpen worden niet bijgewerkt tenzij de download wordt bijgewerkt.',
	'HELP_DL_TOPIC_TYPE'				=> 'Deze optie selecteert het onderwerptype voor de downloadonderwerpen.<br>Na het wijzigen van dit type worden alle nieuw toegevoegde of bewerkte downloads geplaatst met het nieuwe onderwerptype. Bestaande onderwerpen worden niet gewijzigd.',
	'HELP_DL_TOPIC_USER'				=> 'Selecteer hier welke gebruiker als auteur van de downloadonderwerpen wordt vermeld.<br>Als de huidige gebruiker de onderwerpauteur moet zijn, selecteer dan de optie \'huidige gebruiker\'. De optie geselecteerd per categorie maakt het mogelijk om per categorie een aparte gebruiker te kiezen. Dit kan de huidige gebruiker zijn of een gebruiker die is geselecteerd op basis van zijn/haar ID ingevoerd in het veld rechts van het keuzemenu. Dit is aanbevolen voor de optie \'Gebruiker selecteren via ID\'.<br><br><strong>Opmerking:</strong><br>De gebruikers-ID wordt niet gecontroleerd door de downloadextensie, dus een niet-bestaande ID kan de functies verstoren!',

	'HELP_DL_UPLOAD_FILE'			=> 'Het bestand dat moet worden geupload vanaf uw computer.<br>Zorg ervoor dat de bestandsgrootte kleiner is dan de aangegeven limiet en dat de bestandsextensie niet is opgenomen in de lijst die u onder dit veld kunt zien.',
	'HELP_DL_USE_EXT_BLACKLIST'		=> 'Als u de zwarte lijst inschakelt, worden alle ingevoerde bestandstypen geblokkeerd voor het uploaden of bewerken van nieuwe downloads.',
	'HELP_DL_USER_TRAFFIC_ONCE'		=> 'Selecteer of downloads het gebruikersverkeer slechts eenmaal mogen verminderen bij het voor de eerste keer downloaden van een bestand.<br><strong>Let op:</strong><br>Deze optie wijzigt de downloadstatus zelf NIET!',

	'HELP_DL_VISUAL_CONFIRMATION'	=> 'Activeer deze optie om gebruikers te vragen een 5-cijferige bevestigingscode in te voeren alvorens een bestand te downloaden.<br>Als de gebruiker een ongeldige of geen code heeft ingediend, toont de extensie een bericht in plaats van de download vrij te geven.<br>Als deze optie is uitgeschakeld, hoeft de gebruiker geen code in te voeren en kan direct bestanden downloaden vanaf de detailpagina.',

	'HELP_NUMBER_RECENT_DL_ON_PORTAL'	=> 'Het aantal laatste downloads dat de gebruiker op het portaal ziet.<br>De extensie gebruikt de laatste bewerkingstijd voor deze lijst, dus het is mogelijk dat een oudere download bovenaan deze lijst staat.',
]);
