
/*
 * 4)Write a program to use draw Indian flag.
 */
import java.applet.*;
import java.awt.*;

// <applet code="fourFour" width="700" height="700"></applet>
public class fourFour extends Applet {
    Image pic;

    public void init() {
        pic = getImage(getCodeBase(), "./ac.png");
    }

    public void paint(Graphics g) {
        g.setColor(Color.ORANGE);
        g.fillRect(100, 50, 900, 200);

        g.setColor(Color.WHITE);
        g.fillRect(100, 250, 900, 200);

        g.setColor(Color.GREEN);
        g.fillRect(100, 450, 900, 200);
        // g.setColor();

        g.drawImage(pic, 450, 250, this);
    }
}
