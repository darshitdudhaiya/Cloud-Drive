import java.applet.*;
import java.awt.*;

public class second extends Applet
{
	String s=" ";
	public void init()
	{
		s=s+ "init";
	}
	public void start()
	{
		s=s+"start";
	}
	public void distrory()
	{
		s=s+"p";
	}
	public void paint(Graphics g)
	{
		g.setColor(Color.RED);
		g.drawString("  "+s,getHeight()/2,getWidth()/2);		
	}
}
/*
<applet code=second height=500 width=500>
</applet>
*/