// JavaScript Document ------------------------------------------------------------------------------------------------
function counter_up(id, step)
{
	document.getElementById(id).value = parseInt(document.getElementById(id).value) + step;	
}

function counter_down(id, step)
{
	if(parseInt(document.getElementById(id).value) >= step)
	{
		document.getElementById(id).value = parseInt(document.getElementById(id).value) - step;	
	}
}

// JavaScript Document ------------------------------------------------------------------------------------------------

// ��������� ������ � ������������ � ������� ���������� ��������� �� ��������
function ConvertAllCheckbox()
{
	var el=document.getElementsByTagName('input');
	for (var i=0; i<el.length; i++) {
		if (el[i].type.toLowerCase()=='checkbox') {
			doCheckbox(el[i]);
		}
	}
}

// ��������� ��������� ��������
function doCheckbox(elem) {
	// ������� ������ ���� ������ DIV'� � ����� ����� 'boxCheckbox'
	if (elem.className=='boxCheckbox' &&
		elem.parentNode.tagName.toLowerCase()=='div') {
		// �������� ����� "�������" � ����������� �� ��������� �������������
		elem.parentNode.className='box'+(elem.checked?'Checked':'Unchecked');
	}
}

// JavaScript Document 22222222 ----------------------------------------------------------------------------------------

// ��������� ������ � ������������ � ������� ���������� �� ��������
function ConvertAllRadio()
{
	var el=document.getElementsByTagName('input');
	for (var i=0; i<el.length; i++) {
		if (el[i].type.toLowerCase()=='radio') {
			doRadio(el[i]);
		}
	}
}

// ��������� ���������
function doRadio(elem) {
	if (elem.className=='boxRadio' &&
		elem.parentNode.tagName.toLowerCase()=='div') {
		// �������� ����� "�������" � ����������� �� ��������� �������������
		elem.parentNode.className='boxRadio'+(elem.checked?'Checked':'Unchecked');
	}
}