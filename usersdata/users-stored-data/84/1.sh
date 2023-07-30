clear
echo "enter the number: "
read n
sd=0
on=$n

while test $n -gt 0
do
sd=$(( $n % 10 ))
n=$(( $n / 10 ))
rev=$( echo ${rev}${sd} )
done 
if [ $on -eq $rev ]
then
echo "num is palidrome"
else
echo "num is not palidrome"
fi
  
