public class hamming {
    public static void main(String[] args) {
        // Example data bits for encoding
        int[] dataBits = {1, 0, 1, 1}; // D1=1, D2=0, D3=1, D4=1
        // Generate Hamming code with data bits
        int[] hammingCode = generateHammingCode(dataBits);
        System.out.print("Generated Hamming Code: ");
        displayCode(hammingCode);
        // Introduce an error for testing error detection
        hammingCode[2] = hammingCode[2] == 1 ? 0 : 1; // Toggle bit at position 3
        System.out.print("\nHamming Code with Error: ");
        displayCode(hammingCode);
        // Detect error in the codeword
        detectError(hammingCode);
    }
    // Method to generate the (7,4) Hamming Code
    public static int[] generateHammingCode(int[] dataBits) {
        int[] hammingCode = new int[7];
        // Place data bits in positions 3, 5, 6, and 7
        hammingCode[2] = dataBits[0];
        hammingCode[4] = dataBits[1];
        hammingCode[5] = dataBits[2];
        hammingCode[6] = dataBits[3];
        // Calculate parity bits for positions 1, 2, and 4
        hammingCode[0] = dataBits[0] ^ dataBits[1] ^ dataBits[3]; // P1
        hammingCode[1] = dataBits[0] ^ dataBits[2] ^ dataBits[3]; // P2
        hammingCode[3] = dataBits[1] ^ dataBits[2] ^ dataBits[3]; // P4
        return hammingCode;
    }

    // Method to display the code
    public static void displayCode(int[] code) {
        for (int bit : code) {
            System.out.print(bit + " ");
        }
        System.out.println();
    }
    // Method to detect error in a (7,4) Hamming Code
    public static void detectError(int[] code) {
        // Calculate syndrome bits by re-checking parity
        int p1 = code[0] ^ code[2] ^ code[4] ^ code[6];
        int p2 = code[1] ^ code[2] ^ code[5] ^ code[6];
        int p4 = code[3] ^ code[4] ^ code[5] ^ code[6];
        // Determine the error position (if any)
        int errorPosition = (p4 * 4) + (p2 * 2) + p1;
        if (errorPosition == 0) {
            System.out.println("No error detected in the code.");
        } else {
            System.out.println("Error detected at position: " + errorPosition);
            // Correct the error
            code[errorPosition - 1] ^= 1; // Toggle the bit at error position
            System.out.print("Corrected Hamming Code: ");
            displayCode(code);
        }
    }
}