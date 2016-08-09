program bombsort;
uses sysutils;
const ArrMax=100;
const LoopTimes=100;
var 
i,j,tmp,k,x,s:integer;
a:array[1..ArrMax] of integer;
time:real;
begin
time:=now; // Begining time

for x:=1 to LoopTimes do //TODO:Set the times to loop
begin
	randomize;
	for s:=1 to ArrMax do a[s]:=random(1000);
	writeln('Before sort');
	for i:=1 to ArrMax do write(a[i]:5);
	for i:=1 to ArrMax-1 do 
		for j:=ArrMax downto i+1 do 
			if a[j]<a[j-1] then 
			if a[j]<a[j-1] then 
			begin
				tmp:=a[j];
				a[j]:=a[j-1];
				a[j-1]:=tmp;
			end;
	writeln();
	writeln('After sort');
	for i:=1 to ArrMax do write(a[i]:5);
	writeln;
end;

writeln((now-time)*86400); //Ended time
readln;
end.