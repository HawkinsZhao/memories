program quicksort;
uses sysutils;
const ArrMax=100;
var a:array[1..ArrMax] of integer;
k,x,s:integer;
time:real;

function Partition(l,r:integer):integer;
var i,j,tmp,x:integer;
begin
	i:=l-1;x:=a[r];
	for j:=l to r-1 do
	begin
		while (i<j) and (a[j]<=x) do
		begin
			i:=i+1;
			tmp:=a[i];
			a[i]:=a[j];
			a[j]:=tmp;
		end;
	end;
	tmp:=a[i+1];
	a[i+1]:=a[r];
	a[r]:=tmp;
	Partition:=i+1;
end;

procedure QucikSort(l,r:integer);
var tmp:integer;
begin
	if (l<r) then
	begin
		tmp:=Partition(l,r);
		QucikSort(l,tmp-1);
		QucikSort(tmp+1,r);
	end;
end;

begin
time:=now;
for x:=1 to 100 do  //TODO:Set the times to loop
begin
	randomize;
	for s:=1 to ArrMax do a[s]:=random(1000);
	writeln('Before Sort');
	for k:=1 to ArrMax do write(a[k]:5);
	writeln;
	QucikSort(1,ArrMax);
	writeln('After Sort');
	for k:=1 to ArrMax do write(a[k]:5);
	writeln;
end;
writeln((now-time)*86400);
readln;
end.