program InsertSort;
uses sysutils;
const ArrMax=100;
var i,j,tmp,x,s:integer;
a:array[1..ArrMax] of integer;
time:real;

begin
	
	time:=now; // Begining time
	
	for x:=1 to 100 do // TODO:Set the times to loop
	begin
		randomize;
		for s:=1 to ArrMax do a[s]:=random(1000);
		writeln('Before sort');//Before sort
	for i:=1 to ArrMax do write(a[i]:5);
		writeln;
		//Sorting
		for i:=2 to ArrMax do
		begin
			tmp:=a[i];
			j:=i-1;
			while (j>-1) and (a[j]>tmp) do
			begin
				a[j+1]:=a[j];
				j:=j-1;
			end;
			a[j+1]:=tmp;
		end;
		//After sort
		writeln('After sort');
		for i:=1 to ArrMax do write(a[i]:5);
		writeln;
	end;
	
	writeln((now-time)*86400);
	readln;
end.