program selectsort;
uses sysutils;
const ArrMax=100;
var i,j,k,tmp,min,s,x:integer;
a:array[1..ArrMax] of integer;
time:real;
begin
time:=now;

for x:=1 to 100 do //TODO:Set the times to loop
begin
	randomize;
	for s:=1 to ArrMax do a[s]:=random(1000);
	//输出数组
	writeln('Before sort:');
	for i:=1 to ArrMax do write(a[i]:5);
	writeln;
	//开始排序
	k:=0;tmp:=0;
	for i:=1 to ArrMax-1 do 
	begin
		min:=a[i];
		for j:=i+1 to ArrMax do
		begin
			if a[j]<min then 
			begin
				min:=a[j];
				k:=j;
			end;
		end;
		tmp:=a[i];
		a[i]:=a[k];
		a[k]:=tmp;
	end;
	//输出数组
	writeln('After sort');
		for i:=1 to ArrMax do write(a[i]:5);
	writeln;
end;
	writeln((now-time)*86400);
readln;
end.