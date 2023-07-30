import java.io.File;
import java.util.Scanner;

public class read_in_file{
    public static void main(String[] args) {
        try {
            File f = new File("D:demo1.txt");
            Scanner scanner = new Scanner(f);
    
            while (scanner.hasNextLine()) {
                String readdata = scanner.nextLine();
                System.out.println(readdata);
            }
        } catch (Exception e) {
            
        }
    }
}
