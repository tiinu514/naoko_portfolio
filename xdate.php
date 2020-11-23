<span id="view_todayE"></span>

<script type="text/javascript">
document.getElementById("view_todayE").innerHTML = getTodayE();

function getTodayE() {
	var now = new Date();
	var year = now.getFullYear();
	var mon = now.getMonth(); //１足さない
	var day = now.getDate();
	var you = now.getDay(); //曜日(0～6=日～土)

	//曜日の選択肢
	var youbi = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
	//月名の選択肢
	var month = new Array("January","February","March","April","May","June","July","August","September","October","November","December");

	//出力用
	var s = month[mon] + " " + day + ", " + year + " (" +youbi[you] + ")";
	return s;
}
</script>