import java.applet.*;
import java.awt.*;

public class first extends Applet
{
	public void paint(Graphics g)
	{
		g.setColor(Color.RED);
		g.drawString("PARMAR",getHeight()/2,getWidth()/2);		
	}
}
/*
<applet code=first height=500 width=500>
</applet>
*/