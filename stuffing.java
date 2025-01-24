import java.util.Scanner;

public class stuffing {
    
    // Method for Bit Stuffing
    public static String bitStuff(String input) {
        StringBuilder stuffed = new StringBuilder();
        int count = 0;
        
        for (char bit : input.toCharArray()) {
            if (bit == '1') {
                count++;
            } else {
                count = 0;
            }
            stuffed.append(bit);

            // If five consecutive 1's are found, add a 0
            if (count == 5) {
                stuffed.append('0');
                count = 0;
            }
        }
        
        return stuffed.toString();
    }
    
    // Method for Bit De-Stuffing
    public static String bitDeStuff(String stuffed) {
        StringBuilder deStuffed = new StringBuilder();
        int count = 0;
        
        for (char bit : stuffed.toCharArray()) {
            if (bit == '1') {
                count++;
            } else {
                count = 0;
            }
            deStuffed.append(bit);

            // If five consecutive 1's are found, skip the next 0
            if (count == 5) {
                count = 0;
                continue; // Skip the stuffed 0
            }
        }
        
        return deStuffed.toString();
    }
    
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        
        // Input bit stream
        System.out.print("Enter the bit stream (only 1s and 0s): ");
        String input = scanner.nextLine();
        
        // Bit stuffing
        String stuffed = bitStuff(input);
        System.out.println("Stuffed bit stream: " + stuffed);
        
        // Bit de-stuffing
        String deStuffed = bitDeStuff(stuffed);
        System.out.println("De-stuffed bit stream: " + deStuffed);
        
        scanner.close();
    }
}