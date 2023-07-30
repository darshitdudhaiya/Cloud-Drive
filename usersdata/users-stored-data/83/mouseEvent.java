import java.awt.*;
import java.awt.event.*;

class MyFrame extends Frame implements MouseMotionListener{
    // Frame f =new Frame();
    public  MyFrame()
    {
        setLayout(null);
        setSize(900,500);
        setTitle("MouseEvent");
        addMouseMotionListener(this);
        setVisible(true);
    }

    Graphics g;

    public void mouseMoved(MouseEvent e) {
    }
    public void mouseDragged(MouseEvent e) {
        g = getGraphics(); 
       int x = e.getX();
       int y = e.getY(); 
       g.setColor(Color.RED);
       g.drawOval(x, y, 50, 50);
        
    }
}
public class mouseEvent {
        public static void main(String[] args) {
            new MyFrame();
        }
}
