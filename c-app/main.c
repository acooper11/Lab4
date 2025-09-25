#include <stdio.h>

int main(int argc, char **argv) {
    printf("Hello from inside the container! argc=%d\n", argc);
    for (int i = 0; i < argc; ++i) {
        printf("arg %d: %s\n", i, argv[i]);
    }
    return 0;
}
