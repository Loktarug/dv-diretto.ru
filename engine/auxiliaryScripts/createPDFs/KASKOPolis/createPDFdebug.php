<?php
require_once('../FPDF/tfpdf.php');
require('../FPDF/makefont/makefont.php');

//MakeFont('c:\\Windows\\Fonts\\comic.ttf','cp1251');


class PDF extends tFPDF
{
// Page header
    function Header()
    {
        // Logo
        //$this->Image('background.jpg',0,0, 210, 297);
        // Arial bold 10
        $this->AddFont('DejaVu','','ARIALNB.TTF',true);
        $this->SetFont('DejaVu','',10);
        // Title
        $this->SetDrawColor(0);
        $this->Cell(100,8,'ДОГОВОР СТРАХОВАНИЯ ТРАНСПОРТНЫХ СРЕДСТВ №',0,0,'R');
        $this->SetFont('DejaVu','',12);
        $this->Cell(70,8,'ТС №',0,0,'L');
        // Line break
        $this->Ln();
    }
}

$pdf = new PDF('P', 'mm','Letter');
$pdf->SetMargins(20,40,20);
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->AddFont('DejaVu','','ARIALN.TTF',true);
$pdf->SetFont('DejaVu','',5);
$pdf->SetDrawColor(0);
$pdf->SetFillColor(192);

//1 LINE 170px
$pdf->MultiCell(36,3.5,'Признак полиса:',1,'C');
$pdf->Ln(-3.5);
$pdf->Cell(36,7.5,'',1,0,'L');
$pdf->Cell(1,7.5,'',1,0,'L');

$pdf->MultiCell(31,3.5,'Территория покрытия VIP программы:',1,'C');
$pdf->Ln(-3.5);
$pdf->Cell(68,7.5,'',1,0,'L');
$pdf->Cell(1,7.5,'',1,0,'L');

$pdf->MultiCell(51,3.5,'Программа сопровождения VIP программы:',1,'C');
$pdf->Ln(-3.5);
$pdf->Cell(120,7.5,'',1,0,'L');
$pdf->Cell(1,7.5,'',1,0,'L');

$pdf->Cell(24,3.5,'Дата заключения договора:',1,0,'R');

$pdf->Cell(1,3.5,'',1,0,'L');
$pdf->Cell(6,3.5,'',1,0,'L',1);
$pdf->Cell(1,3.5,'',1,0,'L');
$pdf->Cell(6,3.5,'',1,0,'L',1);
$pdf->Cell(1,3.5,'',1,0,'L');
$pdf->Cell(10,3.5,'',1,0,'L',1);

$pdf->Ln(4);

//2 LINE 170px
$pdf->Cell(3.5,3.5,'',1,0,'L',1);
$pdf->Cell(15,3.5,'Первоначальный',1,0,'L');

$pdf->Cell(3.5,3.5,'',1,0,'L',1);
$pdf->Cell(14,3.5,'Возобновленный',1,0,'L');

$pdf->Cell(1,3.5,'',1,0,'L');

$pdf->Cell(3.5,3.5,'',1,0,'L',1);
$pdf->Cell(10,3.5,'Москва',1,0,'L');

$pdf->Cell(3.5,3.5,'',1,0,'L',1);
$pdf->Cell(10,3.5,'Москва+МО',1,0,'L');

$pdf->Cell(5,3.5,'',1,0,'L');

$pdf->Cell(3.5,3.5,'',1,0,'L',1);
$pdf->Cell(8,3.5,'Аварком',1,0,'L');

$pdf->Cell(3.5,3.5,'',1,0,'L',1);
$pdf->Cell(17,3.5,'Сбор справок ГИБДД',1,0,'L');

$pdf->Cell(3.5,3.5,'',1,0,'L',1);
$pdf->Cell(15,3.5,'Сбор справок ОВД',1,0,'L');

$pdf->Cell(2,3.5,'',1,0,'');
$pdf->Cell(20,3.5,'ВАЛЮТА ДОГОВОРА:',1,0,'L');

$pdf->Cell(3.5,3.5,'',1,0,'L',1);
$pdf->Cell(6,3.5,'Рубли',1,0,'L');
$pdf->Cell(1,3.5,'',1,0,'');
$pdf->Cell(3.5,3.5,'',1,0,'L',1);
$pdf->Cell(5,3.5,'USD',1,0,'L');
$pdf->Cell(1,3.5,'',1,0,'');
$pdf->Cell(3.5,3.5,'',1,0,'L',1);
$pdf->Cell(5,3.5,'EUR',1,0,'L');

$pdf->Ln(4);

//3 LINE 170px
$pdf->MultiCell(170,3,'Настоящий Договор заключен между ЗАО "САК "ИНФОРМСТРАХ" (далее – Страховщик) и Страхователем на основании "Правил комбинированного страхования средств наземного транспорта ЗАО "САК "ИНФОРМСТРАХ" от 23.03.09 г. (далее - Правила) и письменного заявления Страхователя',1);

$pdf->Ln(0.5);

//4 LINE 170px
$pdf->Cell(110,2,'Страхователь:                                                                    1. Наименование организации / Фамилия Имя Отчество',1,0,'L');
$pdf->Cell(60,2,'2. ИНН (для юр. лиц) / Паспортные данные, дата рождения, телефон',1,0,'L');

$pdf->Ln(2);

//5 LINE 170px
$pdf->Cell(110,3.5,'',1,0,'L',1);
$pdf->Cell(60,9,'',1,0,'L',1);

$pdf->Ln(3.5);

//6 LINE 110px like rowspan with 5 line
$pdf->Cell(110,2,'3. Адрес',1,0,'L');
$pdf->Ln(2);

//7 LINE 110px like rowspan with 5 line
$pdf->Cell(110,3.5,'',1,0,'L',1);
$pdf->Ln(3.5);

//8 LINE 170px
$pdf->Cell(120,2,'Застрахованное транспортное средство:                          4. Марка / Модель',1,0,'L');
$pdf->Cell(50,2,'5.Регистрационный знак',1,0,'C');

$pdf->Ln(2);

//9 LINE 170px
$pdf->Cell(120,3.5,'',1,0,'L',1);
$pdf->Cell(50,3.5,'',1,0,'L',1);
$pdf->Ln(3.5);


//9 LINE 170px
$pdf->Cell(50,2,'6. ПТС',1,0,'C');
$pdf->Cell(80,2,'7. VIN',1,0,'C');
$pdf->Cell(40,2,'8. Год выпуска',1,0,'C');

$pdf->Ln(2);

//10 LINE 170px
$pdf->Cell(50,3.5,'',1,0,'L',1);
$pdf->Cell(80,3.5,'',1,0,'L',1);
$pdf->Cell(40,3.5,'',1,0,'L',1);
$pdf->Ln(4);

//11 LINE 170px

$pdf->Cell(35,3.5,'9. Срок действия договора страхования:',1,0,'L');

$pdf->Cell(1,3.5,'',1,0,'');

$pdf->Cell(2,3.5,'с',1,0,'R');
$pdf->Cell(8,3.5,'',1,0,'L',1);
$pdf->Cell(3.5,3.5,'час',1,0,'C');
$pdf->Cell(10,3.5,'',1,0,'L',1);
$pdf->Cell(1,3.5,'');
$pdf->Cell(15,3.5,'',1,0,'L',1);
$pdf->Cell(3.5,3.5,'20',1,0,'L');
$pdf->Cell(5,3.5,'',1,0,'L',1);

$pdf->Cell(11,3.5,'по 24.00 час.',1,0,'L');
$pdf->Cell(10,3.5,'',1,0,'L',1);
$pdf->Cell(1,3.5,'');
$pdf->Cell(15,3.5,'',1,0,'L',1);
$pdf->Cell(3.5,3.5,'20',1,0,'L');
$pdf->Cell(5,3.5,'',1,0,'L',1);

$pdf->Ln(3.5);

//12 LINE 120px
$pdf->Cell(120,2,'но не ранее даты оплаты страховой премии (первого взноса) в порядке и сроки, установленные настоящим Договором',1,0,'L');
$pdf->Ln(2);

//13 LINE 170px
$pdf->Cell(70,2,'10. Страховые риски:',1,0,'L');
$pdf->Cell(40,2,'11. Страховая сумма:',1,0,'C');
$pdf->Cell(20,2,'12. Тариф',1,0,'C');
$pdf->Cell(40,2,'13. Страховая премия',1,0,'L');
$pdf->Ln(2);

//14 LINE 170px
$pdf->Cell(70,3.5,'а) АВТОКАСКО (ХИЩЕНИЕ+УЩЕРБ)',1,0,'L');
$pdf->Cell(40,3.5,'',1,0,'C');
$pdf->Cell(20,3.5,'',1,0,'C');
$pdf->Cell(40,3.5,'',1,0,'L');
$pdf->Ln(3.5);

//15 LINE 170px
$pdf->Cell(70,3.5,'б) Ущерб',1,0,'L');
$pdf->Cell(40,3.5,'',1,0,'C');
$pdf->Cell(20,3.5,'',1,0,'C');
$pdf->Cell(40,3.5,'',1,0,'L');
$pdf->Ln(3.5);

//16 LINE 170px
$pdf->Cell(70,3.5,'в) Гражданская ответственность',1,0,'L');
$pdf->Cell(40,3.5,'',1,0,'C');
$pdf->Cell(20,3.5,'',1,0,'C');
$pdf->Cell(40,3.5,'',1,0,'L');
$pdf->Ln(3.5);

//17 LINE 170px
$pdf->Cell(70,3.5,'г) Несчастный случай',1,0,'L');
$pdf->Cell(40,3.5,'',1,0,'C');
$pdf->Cell(20,3.5,'',1,0,'C');
$pdf->Cell(40,3.5,'',1,0,'L');
$pdf->Ln(3.5);

//18 LINE 170px
$pdf->MultiCell(70,1.75,'д) Страхование дополнительного оборудования - согласно перечню, указанному в Листе осмотра ТС   (считается застрахованным по тем же рискам, что и ТС)',1,'L');
$pdf->Ln(-3.5);
$pdf->Cell(70,4);
$pdf->Cell(40,3.5,'',1,0,'R');
$pdf->Cell(20,3.5,'',1,0,'R');
$pdf->Cell(40,3.5,'',1,0,'R');
$pdf->Ln(3.5);

//19 LINE 170px
$pdf->Cell(130,3.5,'ИТОГО:',1,0,'R');
$pdf->Cell(40,3.5,'',1,0,'L');
$pdf->Ln(4);

//20 LINE 170px
$pdf->Cell(20,3.5,'14. Страховая сумма:',1,0,'L');
$pdf->Cell(2,4);

$pdf->Cell(3.5,3.5,'',1,0,'L',1);
$pdf->Cell(12,3.5,'Снижаемая',1,0,'L');

$pdf->Cell(2,4);

$pdf->Cell(3.5,3.5,'',1,0,'L',1);
$pdf->Cell(127,3.5,'Неснижаемая. При неснижаемой страховой сумме п. 7.9. Правил в части слов "по соответствующему риску уменьшается на размер страховой выплаты" не применяется. ',1,0,'L');
$pdf->Ln(4);

//21 LINE 40px
$pdf->Cell(40,2,'15. Порядок уплаты страховой премии:',1,0,'L');
$pdf->Ln(2);

//22 LINE 170px
$pdf->Cell(20,3.5,'1 взнос в сумме:',1,0,'R');
$pdf->Cell(25,3.5,'',1,0,'L',1);
$pdf->Cell(20,3.5,'оплатить до:',1,0,'R');
$pdf->Cell(20,3.5,'',1,0,'L',1);
$pdf->Cell(20,3.5,'2 взнос в сумме:',1,0,'R');
$pdf->Cell(25,3.5,'',1,0,'L',1);
$pdf->Cell(20,3.5,'оплатить до:',1,0,'R');
$pdf->Cell(20,3.5,'',1,0,'L',1);
$pdf->Ln(4);

//23 LINE 170px
$pdf->Cell(20,3.5,'3 взнос в сумме:',1,0,'R');
$pdf->Cell(25,3.5,'',1,0,'L',1);
$pdf->Cell(20,3.5,'оплатить до:',1,0,'R');
$pdf->Cell(20,3.5,'',1,0,'L',1);
$pdf->Cell(20,3.5,'4 взнос в сумме:',1,0,'R');
$pdf->Cell(25,3.5,'',1,0,'L',1);
$pdf->Cell(20,3.5,'оплатить до:',1,0,'R');
$pdf->Cell(20,3.5,'',1,0,'L',1);
$pdf->Ln(4);

//24 LINE 80px
$pdf->Cell(80,2,'16. Выгодоприобретатель по рискам Ущерб, Автокаско, Страхование дополнительного оборудования',1,0,'L');
$pdf->Ln(2);

//25 LINE 170px
$pdf->Cell(170,3.5,'',1,0,'L',1);
$pdf->Ln(4);

//26 LINE 170px
$pdf->Cell(28,3.5,'17. Противоугонное оборудование:',1,0,'L');
$pdf->Cell(2,3.5,'',1,0,'L');
$pdf->Cell(140,3.5,'',1,0,'L',1);
$pdf->Ln(4);

//27 LINE 170px
$pdf->MultiCell(170,2,'18. Лица, допущенные к управлению ТС в отношении настоящего Договора (страхователь-физическое лицо является лицом, допущенным к управлению ТС, исключительно при соответствии требованиям, указанным в настоящем пункте):', 1);
$pdf->Ln(0.5);

//28 LINE 170px
$pdf->Cell(3.5,3.5,'',1,0,'L',1);
$pdf->Cell(2,3.5,'',1,0,'L');
$pdf->Cell(164.5,3.5,'Штатные сотрудники Страхователя-юр. лица на основании доверенности или путевого листа и имеющие водительское удостоверение категории, соответствующей ТС, указанному в настоящем Договоре. ',1,0,'L');
$pdf->Ln(4);

//29 LINE
$pdf->Cell(3.5,3.5,'',1,0,'L',1);
$pdf->Cell(2,3.5,'',1,0,'L');
$pdf->Cell(74.5,3.5,'Допущены любые водители на законном основании и имеющие водительский стаж не менее',1,0,'L');
$pdf->Cell(16,3.5,'',1,0,'L',1);
$pdf->Cell(2,3.5,'',1,0,'L');
$pdf->Cell(25,3.5,'полных лет, и возраст не менее',1,0,'L');
$pdf->Cell(16,3.5,'',1,0,'L',1);
$pdf->Cell(12,3.5,'полных лет;',1,0,'L');
$pdf->Ln(4);

//30 LINE 170px
$pdf->Cell(3.5,3.5,'',1,0,'L',1);
$pdf->Cell(2,3.5,'',1,0,'L');
$pdf->Cell(64,3.5,'Водители, перечисленные в настоящем Договоре: ',1,0,'L');
$pdf->Cell(2,3.5,'',1,0,'L');
$pdf->Cell(3.5,3.5,'',1,0,'L',1);
$pdf->Cell(2,3.5,'',1,0,'L');
$pdf->Cell(80,3.5,'Допущены любые водители на законном основании без ограничений по возрасту и стажу вождения;',1,0,'L');
$pdf->Ln(4);

//31 LINE 170px
$pdf->Cell(6,2,'№ п/п',1,0,'L');
$pdf->Cell(114,2,'Фамилия, Имя, Отчество',1,0,'C');
$pdf->Cell(25,2,'Дата рождения',1,0,'L');
$pdf->Cell(25,2,'Стаж вождения (полных лет)',1,0,'L');
$pdf->Ln(2);

//32 LINE 170px
$pdf->Cell(6,3.5,'1',1,0,'C',1);
$pdf->Cell(114,3.5,'',1,0,'C',1);
$pdf->Cell(25,3.5,'',1,0,'L',1);
$pdf->Cell(25,3.5,'',1,0,'L',1);
$pdf->Ln(3.5);

//33 LINE 170px
$pdf->Cell(6,3.5,'1',1,0,'C',1);
$pdf->Cell(114,3.5,'',1,0,'C',1);
$pdf->Cell(25,3.5,'',1,0,'L',1);
$pdf->Cell(25,3.5,'',1,0,'L',1);
$pdf->Ln(3.5);

//34 LINE 170px
$pdf->Cell(6,3.5,'1',1,0,'C',1);
$pdf->Cell(114,3.5,'',1,0,'C',1);
$pdf->Cell(25,3.5,'',1,0,'L',1);
$pdf->Cell(25,3.5,'',1,0,'L',1);
$pdf->Ln(4);

//35 LINE 170px
$pdf->Cell(6,3.5,'19.',1,0,'C');
$pdf->Cell(3.5,3.5,'',1,0,'C',1);
$pdf->Cell(74,3.5,'ТС не сдается в прокат/аренду и не используется в режиме такси;',1,0,'L');
$pdf->Cell(6,4);

$pdf->Cell(3.5,3.5,'',1,0,'C',1);
$pdf->Cell(30,3.5,'ТС сдается в прокат/аренду;',1,0,'L');
$pdf->Cell(6,4);

$pdf->Cell(3.5,3.5,'',1,0,'C',1);
$pdf->Cell(30,3.5,'ТС используется в режиме такси;',1,0,'L');
$pdf->Cell(6,4);
$pdf->Ln(4);

//36 LINE 104px
$pdf->Cell(6,3.5,'20.',1,0,'C');
$pdf->Cell(3.5,3.5,'',1,0,'C',1);
$pdf->Cell(64,3.5,'Безусловная франшиза по риску "Ущерб", "Автокаско": ',1,0,'L');

$pdf->Cell(30 ,3.5,'',1,0,'C',1);

$pdf->Ln(4);

//37 LINE 130px
$pdf->Cell(6,2,'21.',1,0,'C');
$pdf->Cell(124,2,'Варианты выплаты по риску "Ущерб" (исключая полную конструктивную гибель). Любой из вариантов по выбору Страхователя в отмеченных пределах. ',1,0,'L');
$pdf->Ln(2.5);

//38 LINE 170px
$pdf->Cell(3.5,3.5,'',1,0,'C',1);
$pdf->MultiCell(166.5,1.75,'СТОА по выбору Страхователя - выплата в размере затрат на устранение повреждений на СТОА, выбранной Страхователем, в т.ч. осуществляющей гарантийный ремонт марки
застрахованного ТС, или выплата по калькуляции, составленной на основании средних расценок СТОА, осуществляющих гарантийный ремонт, в субьекте РФ, где заключен договор страхования;',1);
$pdf->Ln(0.5);

//39 LINE 170px
$pdf->Cell(3.5,3.5,'',1,0,'C',1);
$pdf->MultiCell(166.5,1.75,'СТОА-дилер по выбору Страховщика - ремонт на СТОА, осуществляющей гарантийный ремонт марки застрахованного ТС, по выбору Страховщика (при наличии действующего на момент обращения договора между таким
СТОА в субьекте РФ, где заключен настоящий Договор, и Страховщиком) или выплата по калькуляции, составленной на основании средних расценок данных СТОА в субьекте РФ, где заключен договор страхования;',1);
$pdf->Ln(0.5);

//40 LINE 170px
$pdf->Cell(3.5,3.5,'',1,0,'C',1);
$pdf->MultiCell(166.5,3.5,'Калькуляция  - выплата по калькуляции, составленной на основании средних расценок СТОА, не производящих гарантийный ремонт ТС каких-либо марок, в субьекте РФ, где заключен договор страхования;',1);
$pdf->Ln(0.5);

//41 LINE 170px
$pdf->Cell(3.5,3.5,'',1,0,'C',1);
$pdf->MultiCell(166.5,1.75,'СТОА - не дилер по выбору Страховщика - ремонт на СТОА, не осуществляющей гарантийный ремонт ТС любых марок, по выбору Страховщика (при наличии действующего на момент на момент обращения договора между
таким СТОА в субьекте РФ, где заключен настоящий Договор, и Страховщиком) или выплата по калькуляции, составленной на основании средних  расценок данных СТОА в субекте РФ, где заключен договор страхования.',1);
$pdf->Ln(1);

//42 LINE 170px
$pdf->Cell(3.5,3.5,'',1,0,'C',1);
$pdf->MultiCell(166.5,1.75,'С износом - выплата по калькуляции Страховщика, составленной на основании средних расценок СТОА, не производящих гарантийный ремонт  ТС каких-либо марок, в субьекте РФ, где заключен договор страхования,
с вычитанием величины износа заменяемых деталей, рассчитанной в соответствиии с РД 37.009.015-98 в редакции, действующей на дату страхового события. ',1);
$pdf->Ln(0.5);

//43 LINE 170px
$pdf->Cell(6,3.5,'22.',1,0,'C');
$pdf->Cell(20,3.5,'Договор заключен',1,0,'L');
$pdf->Cell(3.5,3.5,'',1,0,'L',1);
$pdf->MultiCell(140,1.75,'Без осмотра (применимо для новых ТС, находящихся в автосалоне; при продлении безубыточного полиса ЗАО "САК "ИНФОРМСТРАХ" без разрыва срока или если выплата осуществлялась направлением на СТОА Страховщика).',1);
$pdf->Ln(0.5);

//44 LINE 170px
$pdf->Cell(26,3.5,'',1,0,'L');
$pdf->Cell(3.5,3.5,'',1,0,'L',1);
$pdf->MultiCell(140,1.75,'С осмотром (для всех остальных случаев) - страхование, обусловленное настоящим  вариантом, распространяется на страховые случаи, происшедшие в течение срока действия договора страхования указанного в настоящем Договоре, но не ранее окончания осмотра застрахованного транспортного средства специально уполномоченным представителем Страховщика.',1);
$pdf->Ln(0.5);
//45 LINE 170px
$pdf->Cell(6,3.5,'23.',1,0,'C');
$pdf->MultiCell(164,1.75,'При наличии зафиксированных при проведении предстрахового осмотра повреждений деталей ТС и последующем повреждении этих же деталей в результате страхового случая:
- по деталям, требовавшим замены до страхового случая, стоимость устранения повреждений, полученных в результате страхового случая, не включается в размер страховой выплаты;
- по детялям, требовавшим ремонта и/или окраски, размер страховой выплаты уменьшается на стоимость устранения повреждений, выявленных при предстраховом осмотре.',1);
$pdf->Ln(0.5);
//46 LINE 170px
$pdf->Cell(6,3.5,'24.',1,0,'C');
$pdf->MultiCell(164,1.75,'Если выбран вариант осуществления страховой выплаты путем оплаты ремонта на СТОА и стоимость ремонта превышает размер страховой выплаты в соответствии с условиями настоящего договора,
Страхователь (Выгодоприобретатель) обязан самостоятельно оплатить СТОА разницу между стоимостью ремонта и размером страховой выплаты. ',1);
$pdf->Ln(0.5);
//47 LINE 170px
$pdf->Cell(6,2,'25.',1,0,'C');
$pdf->MultiCell(164,1.75,'Действие договора прекращается с момента выполнения Страховщиком всех обязательств по выплате страхового возмещения по рискам "Хищение ТС" или "Ущерб" при полной конструктивной гибели ТС. ',1);
$pdf->Ln(0.5);
//48 LINE 170px
$pdf->Cell(6,2,'26.',1,0,'C');
$pdf->MultiCell(164,1.75,'По риску "Гражданская ответственность" установлена безусловная франшиза в размере страховых сумм, установленных законодательством РФ по ОСАГО.',1);
$pdf->Ln(0.5);
//49 LINE 170px
$pdf->Cell(6,3.5,'27.',1,0,'C');
$pdf->MultiCell(164,1.75,'Не является страховым случаем хищение ТС если застрахованное ТС не было оборудовано устройством противоугонной защиты в соотв. с п. 17 настоящего Договора или на момент Хищения соответствующее устройство не было активировано.',1);
$pdf->Ln(0.5);
//50 LINE 170px
$pdf->Cell(6,3.5,'28.',1,0,'C');
$pdf->Cell(32,3.5,'У Страхователя (Собственника) имеются',1,0,'R');
$pdf->Cell(10,3.5,'',1,0,'L',1);
$pdf->Cell(26,3.5,'шт. оригинальных ключей от ТС и',1,0,'C');
$pdf->Cell(10,3.5,'',1,0,'L',1);
$pdf->Cell(86,3.5,'шт. оригинальных брелоков (ключей) от противоугонного оборудования, указанного в п. 18 настоящего Договора. ',1,0,'L');
$pdf->Ln(4);

//51 LINE 170px
$pdf->Cell(6,3.5,'29.',1,0,'C');
$pdf->Cell(20,3.5,'Особые условия: ',1,0,'R');
$pdf->Cell(144,3.5,'',1,0,'L',1);
$pdf->Ln(4);

//51 LINE 170px
$pdf->Cell(6,3.5,'30.',1,0,'C');
$pdf->Cell(30,3.5,'Предыдущий договор страхования: №',1,0,'R');
$pdf->Cell(25,3.5,'',1,0,'L',1);
$pdf->Cell(20,3.5,'Страховщик:',1,0,'R');
$pdf->Cell(35,3.5,'',1,0,'L',1);
$pdf->Cell(30,3.5,'Количество заявленных случаев:',1,0,'R');
$pdf->Cell(20,3.5,'',1,0,'L',1);
$pdf->Cell(3.5,3.5,'');
$pdf->Ln(4);

//52 LINE 170px
$pdf->Cell(6,2,'31.',1,0,'C');
$pdf->MultiCell(164,2,'Правила и Заявление являются неотъемлемой частью настоящего Договора.',1);
$pdf->Ln(0.5);

//53 LINE
$pdf->Cell(35,3.5,'ОТ СТРАХОВЩИКА:',1,0,'L');
$pdf->Cell(50,4);
$pdf->Cell(70,3.5,'СТРАХОВАТЕЛЬ: С Правилами страхования ознакомлен. Экземпляр Правил получил.',1,0,'C');
$pdf->Ln(4);

//54 LINE
$pdf->Cell(20,3.5,'Доверенность №',1,0,'R');
$pdf->Cell(45,3.5,'',1,0,'L',1);
$pdf->Cell(30,3.5,'дата выдачи:',1,0,'R');
$pdf->Cell(35,3.5,'',1,0,'L',1);
$pdf->Ln(4);

//55 LINE
$pdf->Cell(10,4);
$pdf->Cell(30,3.5,'',1,0,'L',1);
$pdf->Cell(3.5,3.5,'/',1,0,'L');
$pdf->Cell(30,3.5,'',1,0,'L',1);
$pdf->Cell(1,4);
$pdf->Cell(35,3.5,'',1,0,'L',1);
$pdf->Cell(3.5,3.5,'/',1,0,'L');
$pdf->Cell(45,3.5,'',1,0,'L',1);
$pdf->Ln(4);

//56 LINE
$pdf->Cell(15,4);
$pdf->Cell(5,3.5,'М.П.',1,0,'C');
$pdf->Cell(1,4);
$pdf->Cell(10,3.5,'Подпись',1,0,'C');
$pdf->Cell(23,4);
$pdf->Cell(10,3.5,'ФИО',1,0,'C');
$pdf->Cell(20,4);
$pdf->Cell(5,3.5,'М.П.',1,0,'C');
$pdf->Cell(1,4);
$pdf->Cell(10,3.5,'Подпись',1,0,'C');
$pdf->Cell(33,4);
$pdf->Cell(10,3.5,'ФИО',1,0,'C');

$pdf->Output();



/*
commonInfo (&$pdf);








function commonInfo(&$pdf)
{
    $pdf->
}*/