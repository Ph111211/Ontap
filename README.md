# Data Type Migration
- $table->bigIncrements('id');
- $table->bigInteger('votes');
- $table->boolean('confirmed');
- $table->char('name', 100);
- $table->dateTime('created_at', $precision = 0);
- $table->date('created_at');
- $table->decimal('amount', $precision = 8, $scale = 2);
- $table->double('amount', 8, 2);
- $table->enum('difficulty', ['easy', 'hard']);
- $table->id();
- $table->integer('votes');
- $table->longText('description');
- $table->string('name', 100);
- $table->time('sunrise', $precision = 0);
- $table->timestamp('added_at', $precision = 0);
- $table->year('birth_year');

# Faker
## Number
- randomDigit             // 7
- randomDigitNot(5)       // 0, 1, 2, 3, 4, 6, 7, 8, or 9
- randomDigitNotNull      // 5
- randomNumber($nbDigits = NULL, $strict = false) // 79907610
- randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL) // 48.8932
- numberBetween($min = 1000, $max = 9000) // 8567
- randomLetter            // 'b'
// returns randomly ordered subsequence of a provided array
- randomElements($array = array ('a','b','c'), $count = 1) // array('c')
- randomElement($array = array ('a','b','c')) // 'b'
- shuffle('hello, world') // 'rlo,h eoldlw'
- shuffle(array(1, 2, 3)) // array(2, 1, 3)
- numerify('Hello ###') // 'Hello 609'
- lexify('Hello ???') // 'Hello wgt'
- bothify('Hello ##??') // 'Hello 42jz'
- asciify('Hello ***') // 'Hello R6+'
- regexify('[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}'); // sm0@y8k96a.ej
## Faker\Provider\Lorem
- word                                             // 'aut'
- words($nb = 3, $asText = false)                  // array('porro', 'sed', 'magni')
- sentence($nbWords = 6, $variableNbWords = true)  // 'Sit vitae voluptas sint non voluptates.'
- sentences($nb = 3, $asText = false)              // array('Optio quos qui illo error.', 'Laborum vero a officia id corporis.', 'Saepe provident esse hic eligendi.')
- paragraph($nbSentences = 3, $variableNbSentenc:es = true) // 'Ut ab voluptas sed a nam. Sint autem inventore aut officia aut aut blanditiis. Ducimus eos odit amet et est ut eum.'
- paragraphs($nb = 3, $asText = false)             // array('Quidem ut sunt et quidem est accusamus aut. Fuga est placeat rerum ut. Enim ex eveniet facere sunt.', 'Aut nam et eum architecto fugit repellendus illo. Qui ex esse veritatis.', 'Possimus omnis aut incidunt sunt. Asperiores incidunt iure sequi cum culpa rem. Rerum exercitationem est rem.')
- text($maxNbChars = 200)                          // 'Fuga totam reiciendis qui architecto fugiat nemo. Consequatur recusandae qui cupiditate eos quod.'
## Name
- title($gender = null|'male'|'female')     // 'Ms.'
- titleMale                                 // 'Mr.'
- titleFemale                               // 'Ms.'
- suffix                                    // 'Jr.'
- name($gender = null|'male'|'female')      // 'Dr. Zane Stroman'
- firstName($gender = null|'male'|'female') // 'Maynard'
- firstNameMale                             // 'Maynard'
- firstNameFemale                           // 'Rachel'
- lastName                                  // 'Zulauf'
##  Address


- secondaryAddress                    // 'Suite 961'
- state                               // 'NewMexico'
- 
- streetSuffix                        // 'Keys'
- buildingNumber                      // '484'
- city                                // 'West Judge'
- streetName                          // 'Keegan Trail'
- streetAddress                       // '439 Karley Loaf Suite 897'
- postcode                            // '17916'
- address                             // '8888 Cummings Vista Apt. 101, Susanbury, NY 95473'
- country                             // 'Falkland Islands (Malvinas)'


## Faker\Provider\en_US\PhoneNumber
- phoneNumber             // '201-886-0269 x3767'
- tollFreePhoneNumber     // '(888) 937-7238'
- e164PhoneNumber     // '+27113456789'
## Faker\Provider\en_US\Company

- company                 // 'Bogan-Treutel'
- companySuffix           // 'and Sons'
- jobTitle                // 'Cashier'
## Faker\Provider\dateTime

- dateTime($max = 'now', $timezone = null) // DateTime('2008-04-25 08:37:17', 'UTC')
- dateTimeAD($max = 'now', $timezone = null) // DateTime('1800-04-29 20:38:49', 'Europe/Paris')
- 
- date($format = 'Y-m-d', $max = 'now') // '1979-06-09'
- time($format = 'H:i:s', $max = 'now') // '20:49:42'
- dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null) // DateTim('2003-03-15 - 02:00:49', 'Africa/Lagos')
-             
- dayOfMonth($max = 'now')              // '04'
- dayOfWeek($max = 'now')               // 'Friday'
- month($max = 'now')                   // '06'
- monthName($max = 'now')               // 'January'
- year($max = 'now')                    // '1993'
- century                               // 'VI'
- timezone                              // 'Europe/Paris'
## Internet
- email                   // 'tkshlerin@collins.com'
- safeEmail               // 'king.alford@example.org'
- freeEmail               // 'bradley72@gmail.com'
- companyEmail            // 'russel.durward@mcdermott.org'
- freeEmailDomain         // 'yahoo.com'
- safeEmailDomain         // 'example.org'
- userName                // 'wade55'
- password                // 'k&|X+a45*2['
- domainName              // 'wolffdeckow.net'
- domainWord              // 'feeney'
- tld                     // 'biz'
- url                     // 'http://www.skilesdonnelly.biz/aut-accusantium-ut-architecto-sit-et.html'

