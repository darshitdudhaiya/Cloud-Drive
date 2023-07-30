import java.awt.*;
import java.awt.event.*;

class test extends Frame {
    public test(){
        setLayout(null);
        setSize(1500,1500);
        setVisible(true);
    }
    public void paint(Graphics g){
        g.setColor(Color.YELLOW);
        g.drawOval(200,200,300,300);
        g.fillOval(200,200,300,300);

        g.setColor(Color.BLACK);
        g.drawOval(280,270,40,40);
        g.fillOval(280,270,41,41);

        g.setColor(Color.BLACK);
        g.drawOval(380,270,40,40);
        g.fillOval(380,270,41,41);
        g.drawArc(270,300,160,140,905,170);




        g.setColor(Color.YELLOW);
        g.drawOval(500,200,300,300);
        g.fillOval(500,200,300,300);

        g.setColor(Color.BLACK);
        g.drawOval(580,270,40,40);
        g.fillOval(580,270,41,41);

        g.setColor(Color.BLACK);
        g.drawOval(680,270,40,40);
        g.fillOval(680,270,41,41);
        g.drawArc(570,360,160,140,0,180);




        g.setColor(Color.YELLOW);
        g.drawOval(800,200,300,300);
        g.fillOval(800,200,300,300);

        g.setColor(Color.BLACK);
        g.drawOval(880,270,40,40);
        g.fillOval(880,270,41,41);

        g.setColor(Color.BLACK);
        g.drawOval(980,270,40,40);
        g.fillOval(980,270,41,41);

        g.drawLine(900,400,1000,400);
    }
}
public class cartoon {
    public static void main(String arg[]){
        new test();
    }
}