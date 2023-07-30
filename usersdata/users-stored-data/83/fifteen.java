/*
 15 Display scrollbar and label. Once scrollbar adjusted its value printed on label.
 */
import java.applet.*;
import javax.swing.*;
import java.awt.event.*;
// <applet code="fifteen" width="700" height="700"></applet>
public class fifteen extends JApplet implements AdjustmentListener{
    JScrollBar jsb1 = new JScrollBar();
    JLabel jlb1 = new JLabel();
    public void init()
    {
        jsb1.addAdjustmentListener(this);
        jsb1.setBounds(200,100,30,150);
        add(jsb1);

        jlb1.setBounds(200,200,100,100);
        jlb1.setText("0");
        add(jlb1);
    }
    @Override
    public void adjustmentValueChanged(AdjustmentEvent e) {
      jlb1.setText(""+jsb1.getValue());
    }
}

