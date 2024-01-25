# Hydra Test

Testowy WP temat potomny dla cut2code.

## Wymagania testu

- Strona powinna być oparta o WordPress.
- Zakodowana strona powinna możliwie wiernie (pixel perfect) odzwierciedlać design na widoku desktop (oczywiście w granicach rozsądku).
- Powinna być responsywna (wersja mobile wedle własnego uznania).
- Powinna działać poprawnie na najnowszych kompilacjach przeglądarek Chrome, FF, Safari oraz Edge (jeśl nie masz możliwości sprawdzenia na którejś z wyżej wymienionych, prosimy o odpowiednią informacje).
- Sekcje powinny być jak najbardziej modularne i reużywalne.
- Nie korzystamy z builderów typu Elementor itp. Można używać np. ACF PRO i Gutenberga.

Dotatkowe uwagi od cut2code: 
- Dobre praktyki w temacie modularnego przygotowania sekcji w WP w aktualnych czasach wskazywały by na tworzenie bloków do gutenberga - natywnie lub ze wsparciem ACF.


## Przygotowanie do projektu

Od dłuższego czasu byłem świadomy że WP podąża w kierunku bloków Gutenberga. Ostanie oficjalne trzy tematy wypuszczone przez WP wręcz wymagają używania bloków.
Nie miałem do tej pory okazji by pracować z blokami, poza okazjonanym wpisaniem jakiegoś teksu do paragrafu. Moje poprzednie realizacje bazowały naprzykład na ACF, headless WP lub zupełnie nie używały WordPress jako CMS.

Wykożystałem możliwość pracy nad Hydra, do sprawdzenia w praktyce jakie są zalety i ograniczenia Gutenberga.
W związku z faktem, że wszedłem na nie odryte dla mnie terytorium, musiałem poeksperymentować i wypracować nowe metody. Odbiło się to na czasie realizacji projektu. Jestem również świadomy że nie wykożystałem pełnego potencjału Gutenberga. Nie stworzyłem nowych bloków na potrzebę testu. Nie zmodyfikowałem funkcjonalności istniejących bloków w jakieś głębszy sposób. W pewnym stopniu jest to wynikiem założeń jakie przyjąłem w projekcie - tylko bloki, bez udziwnień.


## Oś czasu

- 16.01.23
  - zapoznanie się z projektem, analiza wymagań i designu / 1gdź
  - instalacja narzędzi pracy (okazało się że nie potrzebowałem Apache/PHP/MySql/phpmyadmin na moim PC przez ostanie kilka lat 😲 ) / 2 gdź
- 17.01.23
  - instalacja WP i przygotowanie projektu do budowy / 1gdź
- 18.01.23
  - zapozanie się z dokumentacją bloków Gutenberga, tutoriale z budowy bloków / 8gdź
- 19.01.23
  - analiza dokumentacji i tutoriale / 5gdż
- 20.01.23
  - ustawienia czcionek i kolorów w theme.json / 4gdź
- 22.01.23
  - zbudownie stopki / 6gdź
  - zbudownie głównej nawigacji / 4gdź
- 23.01.23
  - zbudowanie struktury strony / 0.5gdź
  - zbudownanie sekcji 'About' / 4gdź
  - zbudowanie sekcji 'Services' / 4gdź
- 24.01.23
  - zbudownaie sekcji 'Process' / 3.5gdź
  - zbudowanie głównego banera / 3.5gdź
  - poprawki / 2gdź
- 25.01.23
  - przygotowanie dokumentacji projektu / 2.5gdź  

  
## Wnioski

Jestem świadomy, że zrealizowana strona nie jest 'pixel perfect' (pojęcie jet kontrowersyjne - design jest statyczny, w tym wypadku tylko dla 'desktop' - rozmiary ekranów w zasadzie nieskończone). Kilka szczegółów takich jak brak kapitalizacji i wytłuszczenia czcionki w głównej nawiagacji, wysokość przycisków, puste przestrzenie między elementami można by było poprawić. Bardziej jednak byłem zainteresowany samą mechaniką budowania w blokami Gutenberga i ich ograniczeniami.

Udało mi się wykorzystać prawdopodobnie zdecydowaną większość opcji oferowanych w interfejsie użytkownika. Proces budowania elementów był bardzo szybki. Niestety, większość czasu miałem wrażenie że muszę hakować bloki by uzyskać pożadany efekt. Szukanie takich rozwiązań pochłoniło większość spędzonego czasu.

Nie udało mi się znaleźć żadnych opcji do kontroli _@media_ i _breakpoints_ w Gutenbergu. Responsywność strony w przedziale tabletów jest fatalna. Stworzyłem kilka klas by nieco poprawić estetykę. Postawienie responsywności do akceptowalnego poziomu wymagałoby dużo czasu.

Klasycznym przykładem ograniczeń Gutenberga i modułowych rozwiązań są _background images_ użyte w banerze. Wijące się linie przez obszar kilku elementów wymuszają by traktować te elementy jak jedną całość. Z drugiej strony chcemy żeby struktura projektu była logiczna i modułowa. Istna kwadratura koła. Przyjąłem że potraktuje linie jako osobne elementy, tam gdzie nie dało się ich utrzymać w granicach szablonów. Sprawa do dyskusji czy można znaleźć zdecydownie lepsze rozwiązanie.

TL;DR

Bardzo osobista opinia: Gutenberg jest dobry i szybki do prostych projektów. Bardziej skomplikowane strony można prawdopodobnie szybciej i lepiej zrobić innymi metodami. Odzczucia na podstawie moich doświadczeń z ostanich dni 😉.


## Szczegóły projektu  

GitHub repozytorium jest dostępne [tutaj](https://github.com/mdzoon/hydra-test/).
Strona powinna działać przy minimalnej instalacji WordPress i tematu _twentytwentyfour_
