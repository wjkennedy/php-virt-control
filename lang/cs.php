<?php
		$info = array(
				'code' => 'cs',
				'name' => 'Čeština (Czech)',
				'translator' => array(
							'name' => 'Michal Novotný',
							'email' => 'minovotn@redhat.com'
				)
		);

		$strings = array(
			'actions' => 'Akce',
			'arch' => 'Architektura',
			'ask-disk-delete' => 'Skutečně si přejete smazat disk',
			'ask-nic-delete' => 'Skutečně si přejete síťovou kartu s MAC adresou',
			'bandwidth' => 'Propustnost',
			'clock-offset' => 'Hodinový offset',
			'confirm-password' => 'Ověření hesla',
			'conn-encrypted' => 'Šifrování spojení',
			'conn-method-libssh2' => 'SSH přes libssh2',
			'conn-method-ssh' => 'SSH',
			'conn-method-tcp' => 'TCP (SASL/Kerberos etc.)',
			'conn-secure' => 'Bezpečné spojení',
			'conn-uri' => 'Adresa URI pro spojení',
			'connected-to' => 'Připojeno k',
			'connection' => 'spojení',
			'connection-add' => 'Přidat spojení',
			'connection-added' => 'Spojení bylo úspěšně přidáno',
			'connection-assoc-cannot-delete' => 'Nelze smazat asociace uživatelů',
			'connection-assoc-failed' => 'Asociace uživatele se spojením selhala',
			'connection-cannot-delete' => 'Nelze smazat spojení',
			'connection-delete' => 'Smazat spojení',
			'connection-details' => 'Detaily spojení',
			'connection-edit' => 'Změnit spojení',
			'connection-edit-failed' => 'Změna spojení se nezdařila',
			'connection-edited' => 'Spojení bylo změněno úspěšně',
			'connection-failed' => 'Spojení se nezdařilo',
			'connection-host' => 'Hostitel',
			'connection-id-not-exist' => 'Spojení neexistuje',
			'connection-logfile' => 'Soubor protokolu',
			'connection-logging' => 'Protokolování',
			'connection-method' => 'Metoda',
			'connection-must-have-name' => 'Spojení nemůže být nepojmenované. Prosím zadejte jméno spojení.',
			'connection-name-exists' => 'Spojení stejného názvu již existuje',
			'connection-password' => 'Heslo',
			'connection-successful' => 'Spojení bylo úspěšně navázáno',
			'connection-type' => 'Typ připojení',
			'connection-uri' => 'Adresa URI pro spojení',
			'connection-uri-changed' => 'Adresa URI pro spojení byla změněna. Přejete si pokračovat?',
			'connection-username' => 'Uživatelské jméno',
			'connections' => 'Seznam spojení',
			'conns' => 'Spojení',
			'cpu-cores' => 'Počet procesorů/jader',
			'cpu-features' => 'Možnosti CPU',
			'cpu-speed' => 'Rychlost CPU',
			'cpu-stats' => 'Statistiky CPU',
			'cpu-stats-per-each-cpu' => 'Statistiky pro jednotlivá CPU',
			'creation-date' => 'Datum vytvoření',
			'date-format' => 'd.m.Y H:i:s',
			'delete' => 'Smazat',
			'deleted' => 'Záznam byl smazán',
			'description' => 'Popis domény',
			'disabled' => 'Zakázáno',
			'disk-image-create' => 'Vytvořit nový diskový obraz',
			'disk-image-path' => 'Cesta k obrazu disku',
			'disk-image-size' => 'Velikost obrazu disku',
			'disk-image-type' => 'Typ obrazu disku',
			'disk-image-use-existing' => 'Použít existující disk',
			'diskless' => 'bez disku',
			'disks' => 'Disk(y) / Celková kapacita',
			'domain-add' => 'Přidat novou doménu (VM)',
			'domain-add-failed' => 'Chyba při vytváření virtuálního stroje',
			'domain-add-ok' => 'Doména byla úspěšně vytvořena',
			'domain-blocked' => 'Blokováno',
			'domain-cannot-start' => 'Nelze spustit doména',
			'domain-crashed' => 'Spadnuta',
			'domain-destroy' => 'Ukončit doménu',
			'domain-dump' => 'Vypsat XML informace',
			'domain-edit' => 'Změnit doménu',
			'domain-menu-boot' => 'Nastavení startu',
			'domain-menu-disks' => 'Disková zařízení',
			'domain-menu-host' => 'Zařízení z hostitele',
			'domain-menu-memory' => 'Paměť',
			'domain-menu-multimedia' => 'Multimediální zařízení',
			'domain-menu-nics' => 'Síťová zařízení',
			'domain-menu-overview' => 'Přehled',
			'domain-menu-processor' => 'Procesor',
			'domain-migrate' => 'Migrovat doménu',
			'domain-migrated' => 'Doména byla úspěšně migrována',
			'domain-nostate' => 'Beze stavu',
			'domain-paused' => 'Pozastaveno',
			'domain-resume' => 'Obnovit běh',
			'domain-resumed' => 'Běh domény byla úspěšně obnoven',
			'domain-running' => 'Běží',
			'domain-screenshot' => 'Získat snímek obrazovky',
			'domain-shutdown' => 'Vypnout',
			'domain-shutoff' => 'Vypnuta',
			'domain-start' => 'Zapnout doménu',
			'domain-started' => 'Doména byla úspěšně zapnuta',
			'domain-stop' => 'Vypnout doménu',
			'domain-stopped' => 'Doména byla vypnuta',
			'domain-suspend' => 'Uspat doménu',
			'domain-suspended' => 'Doména byla úspěšně uspána',
			'domain-undefine' => 'Smazat doménu',
			'domains' => 'Seznam domén',
			'drive-location' => 'Umístění mechaniky',
			'edit' => 'Upravit',
			'emulator-type' => 'Typ emulace',
			'enabled' => 'Zapnuto',
			'error' => 'Chyba',
			'for-php' => 'pro PHP',
			'general' => 'Obecné informace',
			'generate' => 'Vygenerovat',
			'graphics-port' => 'Port pro grafiku',
			'guest-device' => 'Zařízení v doméně',
			'guest-vcpus' => 'Přirazená vCPU',
			'home' => 'Domovská stránka',
			'host-cpus' => 'CPU na hostiteli',
			'host-details' => 'Detaily o hostiteli',
			'host-information' => 'Informace o hostiteli',
			'host-running' => 'Hostitel běží na',
			'hostname' => 'Jméno hostitele',
			'hypervisor' => 'Hypervisor',
			'hypervisor-limit' => 'Limit hypervisora',
			'id' => 'ID',
			'incompatible-archs' => 'Varování: Původní architektura a zvolená architektura nejsou kompatibilní',
			'install-image' => 'Instalační obraz',
			'live-migration' => 'Živá migrace',
			'loading' => 'Nahrávám data ...',
			'local' => 'Lokální',
			'login' => 'Přihlásit se',
			'login-failed' => 'Přihlášení selhalo. Prosím zkuste znovu.',
			'machine-type' => 'Typ stroje',
			'max-vcpus' => 'Maximum CPU pro doménu',
			'mem-stats' => 'Statistiky paměti',
			'memory' => 'Paměť',
			'memory-current' => 'Aktuální alokace paměti',
			'memory-max' => 'Maximální alokace paměti',
			'migrate-no-connection' => 'Žádné spojení není dostupné pro migraci',
			'missing-password' => 'Chybějicí heslo',
			'missing-username' => 'Chybějící uživatelské jméno',
			'model' => 'Model',
			'modinfo' => 'Informace o modulu (anglicky)',
			'msg' => 'Zpráva',
			'name' => 'Jméno',
			'net-active' => 'Síť je aktivní',
			'net-dev' => 'Síťové zařízení',
			'net-dhcp-end' => 'Konec DHCP rozsahu',
			'net-dhcp-range' => 'Přidělený DHCP rozsah',
			'net-dhcp-start' => 'Začátek DHCP rozsahu',
			'net-dump' => 'Vypsat XML schéma sítě',
			'net-edit' => 'Upravit XML schéma sítě',
			'net-forward' => 'Přeposílání',
			'net-forward-dev-any' => 'Přeposílat na aktivní',
			'net-forward-dev-empty-msg' => 'prázdné znamená posílat na jakékoliv aktivní rozhraní',
			'net-forward-nat' => 'Síťový překlad adres (NAT)',
			'net-forward-none' => 'Izolovaná síť',
			'net-forward-route' => 'Přeposílání pomocí tras (route)',
			'net-ip' => 'IP adresa brány',
			'net-ip-cidr' => 'Definovat pomocí CIDR definice',
			'net-ip-direct' => 'Definovat přímo',
			'net-ip-range-def' => 'Rozsah IP adres',
			'net-ipdef-cidr' => 'CIDR definice',
			'net-mask' => 'Maska sítě',
			'net-range' => 'Rozsah sítě',
			'net-setup-dhcp' => 'Nastavit DHCP server',
			'net-start' => 'Zapnout síť',
			'net-stop' => 'Vypnout síť',
			'net-undefine' => 'Smazat síť',
			'network-add' => 'Přidat novou síť',
			'network-add-failed' => 'Nelze přidat síť',
			'network-add-ok' => 'Virtuální síť byla úspěšně přidána',
			'network-dump' => 'Vypsat informace o síti',
			'network-edit' => 'Upravit síť',
			'network-edit-failed' => 'Nezdařilo se změnit definici sítě',
			'network-edit-ok' => 'Definice sítě byla úspěšně změněna',
			'network-generate-mac' => 'Vygenerovat MAC adresu',
			'network-started' => 'Síť byla zapnuta',
			'network-stopped' => 'Síť byla vypnuta',
			'network-undefined' => 'Síť byla smazána',
			'networking' => 'Síťování',
			'networks' => 'Virtuální sítě',
			'new-vm-disk' => 'Disk pro novou doménu',
			'nics' => 'NIC(s)',
			'no' => 'Ne',
			'no-connection' => 'Žádné spojení',
			'no-host-devices' => 'Žádná zařízení z hostitele nejsou připojena',
			'node-information' => 'Informace o uzlu',
			'not-connected' => 'Není aktivní žádné připojení k libvirt serveru',
			'operation-failed' => 'Operace selhala',
			'password' => 'Heslo',
			'password-mismatch' => 'Heslo nebylo ověřeno',
			'pcpus' => 'Fyzická CPU',
			'permission-network-create' => 'Vytvořit novou síť',
			'permission-network-delete' => 'Smazat síť',
			'permission-network-edit' => 'Změnit konfiguraci sítě',
			'permission-save-connection' => 'Uložit spojení',
			'permission-user-create' => 'Vytvořit nového uživatele',
			'permission-user-delete' => 'Smazat uživatele',
			'permission-user-edit' => 'Upravit nastavení uživatele',
			'permission-vm-create' => 'Vytvořit nový virtuální stroj',
			'permission-vm-delete' => 'Smazat virtuální stroj',
			'permission-vm-edit' => 'Změnit konfiguraci virtualního stroje',
			'permissions' => 'Oprávnění',
			'persistent' => 'Přetrvávající',
			'remote' => 'Vzdálený stroj',
			'save-changes' => 'Uložit změny',
			'select-option' => '- Zvolte možnost -',
			'setup-disk' => 'Nastavení disku',
			'setup-nic' => 'Nastavení sítě',
			'state' => 'Stav',
			'storage' => 'Úložistě',
			'system-information' => 'Informace o hostitelském systému',
			'test' => 'Test',
			'title-vmc' => 'Správce virtuální strojů',
			'total-memory' => 'Celková paměť',
			'unknown' => 'Neznámo',
			'upper-menu-logout' => 'Odhlásit uživatele',
			'upper-menu-settings' => 'Nastavení',
			'upper-menu-users' => 'Správa uživatelů',
			'user-add' => 'Přidat nového uživatele',
			'user-add-failed' => 'Nelze přidat nového uživatele',
			'user-add-ok' => 'Uživatel byl úspěšně přidán',
			'user-del' => 'Smazat uživatele',
			'user-delete' => 'Smazat uživatele',
			'user-edit' => 'Upravit uživatele',
			'user-edit-ok' => 'Informace o uživateli byly změněny',
			'username' => 'Jméno uživatele',
			'users' => 'Správa uživatelů',
			'vcpus' => 'vCPU',
			'version' => 'Verze',
			'vm-boot-cd' => 'CD-ROM mechanika',
			'vm-boot-dev1' => 'První boot mechanika',
			'vm-boot-dev2' => 'Druhá boot mechanika',
			'vm-boot-fda' => 'Disketová mechanika',
			'vm-boot-hdd' => 'Pevný disk',
			'vm-boot-none' => 'Není',
			'vm-boot-opts' => 'Nastavení startu (bootu) virtuálního stroje',
			'vm-boot-pxe' => 'PXE',
			'vm-details' => 'Detaily o virtuálním stroji',
			'vm-dev-pci' => 'PCI zařízení',
			'vm-dev-usb' => 'USB zařízení',
			'vm-disk-add' => 'Přidat blokové zařízení',
			'vm-disk-add-data' => 'Formulář pro přidání zařízení',
			'vm-disk-allocation' => 'Alokace zařízení',
			'vm-disk-bus' => 'Sběrnice zařízení',
			'vm-disk-capacity' => 'Kapacita zařízení',
			'vm-disk-details' => 'Detaily o virtuálním diskovém zařízení',
			'vm-disk-dev' => 'Blokové zařízení ve VM',
			'vm-disk-image' => 'Obraz blokového zařízení',
			'vm-disk-num' => 'Počet blokových zařízení',
			'vm-disk-physical' => 'Fyzická velikost blokového zařízení',
			'vm-disk-remove' => 'Odebrat blokové zařízení',
			'vm-disk-storage' => 'Úložiště zařízení',
			'vm-disk-type' => 'Typ blokového zařízení',
			'vm-host-devices' => 'VM zařízení z hostitele',
			'vm-multimedia' => 'VM multimediální zařízení',
			'vm-multimedia-console' => 'Konzolové zařízení',
			'vm-multimedia-graphics' => 'Grafické zařízení',
			'vm-multimedia-input' => 'Vstupní zařízení',
			'vm-multimedia-sound' => 'Zvuková zařízení',
			'vm-multimedia-video' => 'Video zařízení',
			'vm-network-add' => 'Přidat síťové zařízení',
			'vm-network-add-data' => 'Formulář pro přidání zařízení',
			'vm-network-mac' => 'MAC adresa',
			'vm-network-net' => 'Síť',
			'vm-network-nic' => 'Síťová karta',
			'vm-network-remove' => 'Odebrat síťovou kartu',
			'vm-network-type' => 'Typ síťové karty',
			'vm-nic-details' => 'Detaily o síťové kartě',
			'vm-nic-num' => 'Počet síťových karet',
			'vm-soundhw-type' => 'Zvukový hardware',
			'vm-soundhw-type-none' => 'Žádný zvukový hardware',
			'website' => 'Stránka projektu',
			'yes' => 'Ano',
			'settings' => 'Nastavení',
			'using-ssh-auth' => 'Používání SSH autorizace',
			'language' => 'Jazyk',
			'permission-node-info' => 'Oprávnění ke zobrazení informací o uzlu',
			'domain-edit-ok' => 'Doména byla úspěšně změněna. Změna se projeví po dalším restartu',
                        'interval-sec' => 'Interval (sekund)',
                        'change' => 'Změnit',
                        'domain-screenshot' => 'Snímek obrazovky',
			'translator-mode' => 'Překladatelský mód',
			'translation-for' => 'Text pro překlad',
			'translated-string' => 'Přeložený text',
			'translation-for-texts' => 'Překlad pro dlouhý text',
			'translated-text' => 'Přeložený dlouhý text (může obsahovat HTML)',
			'translation-missing-string' => 'Chybí překlad jednoho či více textů',
			'translation-missing-text' => 'Chybí překlad jednoho či více dlouhých textů',
			'translation-generate' => 'Vygenerovat soubor překladu',
			'permission-denied' => 'Nemáte oprávnění k přístupu na tuto stránku',
			'language-code' => 'Kód jazyka',
			'language-name' => 'Název jazyka',
			'translator-name' => 'Jméno překladatele',
			'translator-email' => 'E-mail překladatele',
			'my-connection-assoc' => 'Asociace uživatelů a připojení',
			'allowed-users' => 'Asociovaní uživatelé',
			'user-assoc-edit' => 'Upravit asociace',
			'user-assoc-submit' => 'Editovat asociace',
			'user-api-key' => 'API klíč uživatele',
			'renew' => 'Obnovit',
			'apikey-renew-msg' => 'Obnovení API klíče bude mít za následek nutnost přenastavení klienských aplikací využívajících API klíč. Přejete si pokračovat?',
			'user-registration-user-agent' => 'Klient použitý pro registraci',
			'user-registered-from' => 'Datum registrace',
			'user-last-login' => 'Datum posledního přihlášení',
			'user-num-logins' => 'Celkový počet přihlášení'
		);

		$texts = array(
			'error-page' => 'Stránka, kterou se snažíte zobrazit na serveru neexistuje. Prosím kontaktujte autora systému.',
			'project-information' => 'Tento projekt je správce virtuálních strojů napsaný v jazyce PHP za použití knihovny libvirt-php. Přes tento manažer můžete spravovat své virtuální stroje na všech vých uzlech. Pro navigaci můžete použít levého horního menu a zvolit spojení se <i>Seznamu spojení</i> a poté zvolit doménu ze <i>Seznamu domén</i>. Též si můžete zobrazit informace o aktuálním připojeném uzlu, pokud máte dostačující oprávnění či zobrazovat a měnit nastavení virtuálních strojů či virtuálních sítí. (TBD)',
			'delete-question' => 'Skutečně si přejete smazat objekt <i>%N</i>? Prosím mějte na vědomí, že tuto operaci není možné vrátit. Přejete si pokračovat?',
			'dump' => 'Právě se díváte na výpis pro <i>%N</i>:',
			'info-apache-key-copy' => 'K projektu php-virt-control je přibalena utilita <b>apache-key-copy</b> (možno nalézt v podadresáři tools), která umožňuje nastavení SSH klíčů pro použití serverem Apache a jazykem PHP. Toto je užitečné především pro nastavení SSH authentizace bez hesla (password-less authentization), protože SSH transport nepodporuje předávání přihlašovacích informací SSH procesu a tedy je nezbytné použít tento typ authentizace pro SSH transport. Výjimkou je leda užití autorizace pomocí <i>libssh2</i> knihovny, které však nemusí být vždy dostupné. Z tohoto důvodu je zde dostupná utilita <b>apache-key-copy</b>, která musí být spuštěna v kontextu superuživatele root, aby byla schopná přepnutí do uživatele apache i v případě, že uživatel nemá přiřazený žádný shell. Zde bude aplikace přistupovat domovský adresář uživatele apache, kde vytvoří SSH klíč (pokud neexistuje) a zkopíruje veřejný klíč na vzdálený systém, který chcete spravovat.'
			);
?>
