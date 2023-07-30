import java.applet.*;
import java.awt.*;
import javax.swing.*;
import java.awt.event.*;

// <applet code = "ten" width="500" height="500" ></applet>

public class ten extends Applet implements MouseListener,MouseMotionListener{
    String msg;
    int x,y;
    public void init()
    {
        super.init();
        setSize(500,500);
        addMouseListener(this);
        addMouseMotionListener(this);
    }
    public void paint(Graphics g)
    {
        showStatus(msg);
        g.fillRect(100,100,50,30);
        g.drawString("X:"+x+" Y:"+y,50,30);
    }

    public void mouseClicked(MouseEvent e){

    }
    public void mouseEntered(MouseEvent e){
        
    }
    public void mousePressed(MouseEvent e){
        
    }
    public void mouseDragged(MouseEvent e){
        x=e.getX();
        y=e.getY();
        msg = "X:"+x+" Y:"+y;
        repaint();
    }
    public void mouseMoved(MouseEvent e){
        x=e.getX();
        y=e.getY();
        msg = "X:"+x+" Y:"+y;
        repaint();
    }
    public void mouseExited(MouseEvent e){
        
    }
    public void mouseReleased(MouseEvent e){
        
    }
}
